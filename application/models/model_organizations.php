<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_organizations extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'organizations';
		
		//Remember to replace this:
		$this->search_field = 'organization';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the organizations table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",o.id,o.organization,o.address1,o.address2,o.city,o.state,o.zip,o.main_phone" : ",o.id,o.organization,o.address1,o.address2,o.city,o.state,o.zip,o.main_phone";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('organizations  as o');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'o.id', $id );
        }

		$query = $this->db->get();

		if ( $query->num_rows() > 0 )
		{
			$row = $query->row_array();
			return $this->formatValues($row);
		}
        else
        {
            return array();
        }
	}



	function insert ( $data )
	{
		$this->db->insert( 'organizations', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'organizations', $data );
	}


	
	function delete ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( 'id', $id );            
        }
        else
        {
            $this->db->where( 'id', $id );
        }
		$this->db->delete( 'organizations' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',o.id,o.organization,o.address1,o.address2,o.city,o.state,o.zip,o.main_phone');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",o.id,o.organization,o.address1,o.address2,o.city,o.state,o.zip,o.main_phone", FALSE);
		 
		$this->db->from( 'organizations as o' );
		if ($segments['search_text']){
        	$this->db->where( $this->search_field . ' LIKE "%'. $segments['search_text'] .'%"' );
        }
		 
		$this->db->order_by( $segments['sort_by'], $segments['sort_order'] );
        
        
		$this->db->limit( $perPage, $segments['page']);
   
		$query = $this->db->get();

		$temp_result = array();

		foreach ( $query->result_array() as $row )
		{
			$temp_result[] = $this->formatValues($row);
		}
        $this->db->flush_cache(); 
		return $temp_result;
	}
	
	
	function total_rows($search_text = '') {
			if ($search_text){
				
				$this->db->like($this->search_field, $search_text); 
			}
			
			 return $this->db->count_all_results('organizations');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('organizations.organization'),
	'id' => lang('organizations.id'),
	'organization' => lang('organizations.organization'),
	'address1' => lang('organizations.address1'),
	'address2' => lang('organizations.address2'),
	'city' => lang('organizations.city'),
	'state' => lang('organizations.state'),
	'zip' => lang('organizations.zip'),
	'main_phone' => lang('organizations.main_phone')
);

        if( $withID == FALSE )
        {
            unset( $fs[0] );
        }
        return $fs;
    }  


    /**
     *  Parses the table data and look for enum values, to match them with language variables
     */             
    function metadata()
    {
        $this->load->library('explain_table');

        $metadata = $this->explain_table->parse( 'organizations' );

        foreach( $metadata as $k => $md )
        {
            if( !empty( $md['enum_values'] ) )
            {
                $metadata[ $k ]['enum_names'] = array_map( 'lang', $md['enum_values'] );                
            } 
        }
        return $metadata; 
    }
	
	function formatValues($row)
	{
		
		return $row;
	}
	
	
	
	function auto_organization ( $keyword )
	{	
		$this->db->select( 'id , organization' );
		$this->db->like('organization', $keyword, 'after'); 
		$this->db->from( 'organizations' );
		$this->db->order_by('organization', 'asc'); 
		$query = $this->db->get();
		return $query;
	}
}
