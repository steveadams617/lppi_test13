<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sfzips extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'sfzips';
		
		//Remember to replace this:
		$this->search_field = 'sfz_zip';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the sfzips table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",s.sfz_id,s.sfz_zip,s.sfz_neighhoods" : ",s.sfz_id,s.sfz_zip,s.sfz_neighhoods";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('sfzips  as s');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 's.sfz_id', $id );
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
		$this->db->insert( 'sfzips', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'sfz_id', $id );
		$this->db->update( 'sfzips', $data );
	}


	
	function delete ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( 'sfz_id', $id );            
        }
        else
        {
            $this->db->where( 'sfz_id', $id );
        }
		$this->db->delete( 'sfzips' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',s.sfz_id,s.sfz_zip,s.sfz_neighhoods');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'sfz_id';
	    
	    $this->db->start_cache();
		$this->db->select( ",s.sfz_id,s.sfz_zip,s.sfz_neighhoods", FALSE);
		 
		$this->db->from( 'sfzips as s' );
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
			
			 return $this->db->count_all_results('sfzips');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('sfzips.sfz_zip'),
	'sfz_id' => lang('sfzips.sfz_id'),
	'sfz_zip' => lang('sfzips.sfz_zip'),
	'sfz_neighhoods' => lang('sfzips.sfz_neighhoods')
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

        $metadata = $this->explain_table->parse( 'sfzips' );

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
	
	
	
}
