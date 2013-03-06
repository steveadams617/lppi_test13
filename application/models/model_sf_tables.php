<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_sf_tables extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'sf_tables';
		
		//Remember to replace this:
		$this->search_field = '';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the sf_tables table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",s.t_id,s.tablename,s.usetable" : ",s.t_id,s.tablename,s.usetable";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('sf_tables  as s');
        

		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 's.t_id', $id );
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
		$this->db->insert( 'sf_tables', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 't_id', $id );
		$this->db->update( 'sf_tables', $data );
	}


	
	function delete ( $id )
	{
        if( is_array( $id ) )
        {
            $this->db->where_in( 't_id', $id );            
        }
        else
        {
            $this->db->where( 't_id', $id );
        }
		$this->db->delete( 'sf_tables' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',s.t_id,s.tablename,s.usetable');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 't_id';
	    
	    $this->db->start_cache();
		$this->db->select( ",s.t_id,s.tablename,s.usetable", FALSE);
		 
		$this->db->from( 'sf_tables as s' );
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
			
			 return $this->db->count_all_results('sf_tables');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(,
	't_id' => lang('sf_tables.t_id'),
	'tablename' => lang('sf_tables.tablename'),
	'usetable' => lang('sf_tables.usetable')
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

        $metadata = $this->explain_table->parse( 'sf_tables' );

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
