<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_provider extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'provider';
		
		//Remember to replace this:
		$this->search_field = 'first_name';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the provider table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",p.id,organization_id,organizations.organization AS organization_id_auto,p.provider_type_id,p.first_name,p.last_name,p.prof_inits,p.work_direct_phone,p.work_extension,p.work_fax,p.work_pager,p.work_cell,p.personal_cell,p.email,p.contact_preferences" : ",p.id,organizations.organization AS organization_id,p.provider_type_id,p.first_name,p.last_name,p.prof_inits,p.work_direct_phone,p.work_extension,p.work_fax,p.work_pager,p.work_cell,p.personal_cell,p.email,p.contact_preferences";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('provider  as p');
        $this->db->join( 'organizations', 'organization_id = organizations.id', 'left' );


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
		$this->db->insert( 'provider', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'provider', $data );
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
		$this->db->delete( 'provider' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',p.id,organization_id,organizations.organization AS organization_id_auto,p.provider_type_id,p.first_name,p.last_name,p.prof_inits,p.work_direct_phone,p.work_extension,p.work_fax,p.work_pager,p.work_cell,p.personal_cell,p.email,p.contact_preferences');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",p.id,organizations.organization AS organization_id,p.provider_type_id,p.first_name,p.last_name,p.prof_inits,p.work_direct_phone,p.work_extension,p.work_fax,p.work_pager,p.work_cell,p.personal_cell,p.email,p.contact_preferences", FALSE);
		 $this->db->join( 'organizations', 'organization_id = organizations.id', 'left' );

		$this->db->from( 'provider as p' );
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
				$this->db->join( 'organizations', 'organization_id = organizations.id', 'left' );

				$this->db->like($this->search_field, $search_text); 
			}
			
			 return $this->db->count_all_results('provider');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('provider.first_name'),
	'id' => lang('provider.id'),
	'organization_id' => lang('provider.organization_id'),
	'provider_type_id' => lang('provider.provider_type_id'),
	'first_name' => lang('provider.first_name'),
	'last_name' => lang('provider.last_name'),
	'prof_inits' => lang('provider.prof_inits'),
	'work_direct_phone' => lang('provider.work_direct_phone'),
	'work_extension' => lang('provider.work_extension'),
	'work_fax' => lang('provider.work_fax'),
	'work_pager' => lang('provider.work_pager'),
	'work_cell' => lang('provider.work_cell'),
	'personal_cell' => lang('provider.personal_cell'),
	'email' => lang('provider.email'),
	'contact_preferences' => lang('provider.contact_preferences')
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

        $metadata = $this->explain_table->parse( 'provider' );

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
	
	
	
	function auto_first_name ( $keyword )
	{	
		$this->db->select( 'id , first_name' );
		$this->db->like('first_name', $keyword, 'after'); 
		$this->db->from( 'provider' );
		$this->db->order_by('first_name', 'asc'); 
		$query = $this->db->get();
		return $query;
	}
}
