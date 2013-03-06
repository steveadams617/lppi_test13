<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_patients extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'patients';
		
		//Remember to replace this:
		$this->search_field = 'mrn';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the patients table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",p.id,p.first_name,p.last_name,p.middle_name,p.nick_alias,p.mrn,p.DOB,p.city,p.state,p.zip,p.phone" : ",p.id,p.first_name,p.last_name,p.middle_name,p.nick_alias,p.mrn,p.DOB,p.city,p.state,p.zip,p.phone";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('patients  as p');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'p.id', $id );
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
		$this->db->insert( 'patients', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'patients', $data );
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
		$this->db->delete( 'patients' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',p.id,p.first_name,p.last_name,p.middle_name,p.nick_alias,p.mrn,p.DOB,p.city,p.state,p.zip,p.phone');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",p.id,p.first_name,p.last_name,p.middle_name,p.nick_alias,p.mrn,p.DOB,p.city,p.state,p.zip,p.phone", FALSE);
		 
		$this->db->from( 'patients as p' );
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
			
			 return $this->db->count_all_results('patients');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('patients.mrn'),
	'id' => lang('patients.id'),
	'first_name' => lang('patients.first_name'),
	'last_name' => lang('patients.last_name'),
	'middle_name' => lang('patients.middle_name'),
	'nick_alias' => lang('patients.nick_alias'),
	'mrn' => lang('patients.mrn'),
	'DOB' => lang('patients.DOB'),
	'city' => lang('patients.city'),
	'state' => lang('patients.state'),
	'zip' => lang('patients.zip'),
	'phone' => lang('patients.phone')
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

        $metadata = $this->explain_table->parse( 'patients' );

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
		$row['DOB'] = formatDate( $row['DOB'] , 'm/d/Y' );

		return $row;
	}
	
	
	
}
