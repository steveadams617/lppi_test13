<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_supports extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'supports';
		
		//Remember to replace this:
		$this->search_field = 'first_name';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the supports table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",s.id,s.episode_id,s.first_name,s.last_name,s.nick_alias,s.relationship,s.city,s.state,s.zip,s.home_phone,s.work_phone,s.cell_phone,s.memo" : ",s.id,episodes.start_date AS episode_id,s.first_name,s.last_name,s.nick_alias,s.relationship,s.city,s.state,s.zip,s.home_phone,s.work_phone,s.cell_phone,s.memo";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('supports  as s');
        $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );


		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 's.id', $id );
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
		$this->db->insert( 'supports', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'supports', $data );
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
		$this->db->delete( 'supports' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',s.id,s.episode_id,s.first_name,s.last_name,s.nick_alias,s.relationship,s.city,s.state,s.zip,s.home_phone,s.work_phone,s.cell_phone,s.memo');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",s.id,episodes.start_date AS episode_id,s.first_name,s.last_name,s.nick_alias,s.relationship,s.city,s.state,s.zip,s.home_phone,s.work_phone,s.cell_phone,s.memo", FALSE);
		 $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );

		$this->db->from( 'supports as s' );
		if ($segments['search_text']){
        	$this->db->where( $this->search_field . ' LIKE "%'. $segments['search_text'] .'%"' );
        }
		 $this->db->where('s.episode_id', $this->session->userdata('episode_id'));

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
				$this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );

				$this->db->like($this->search_field, $search_text); 
			}
			$this->db->where('episode_id', $this->session->userdata('episode_id'));

			 return $this->db->count_all_results('supports');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('supports.first_name'),
	'id' => lang('supports.id'),
	'episode_id' => lang('supports.episode_id'),
	'first_name' => lang('supports.first_name'),
	'last_name' => lang('supports.last_name'),
	'nick_alias' => lang('supports.nick_alias'),
	'relationship' => lang('supports.relationship'),
	'city' => lang('supports.city'),
	'state' => lang('supports.state'),
	'zip' => lang('supports.zip'),
	'home_phone' => lang('supports.home_phone'),
	'work_phone' => lang('supports.work_phone'),
	'cell_phone' => lang('supports.cell_phone'),
	'memo' => lang('supports.memo')
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

        $metadata = $this->explain_table->parse( 'supports' );

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
