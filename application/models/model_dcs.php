<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_dcs extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'dcs';
		
		//Remember to replace this:
		$this->search_field = 'plan';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the dcs table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",d.id,d.episode_id,d.plan,d.transport_arranged_date,d.transport_details" : ",d.id,episodes.start_date AS episode_id,d.plan,d.transport_arranged_date,d.transport_details";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('dcs  as d');
        $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );


		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'd.id', $id );
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
		$this->db->insert( 'dcs', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'dcs', $data );
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
		$this->db->delete( 'dcs' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',d.id,d.episode_id,d.plan,d.transport_arranged_date,d.transport_details');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",d.id,episodes.start_date AS episode_id,d.plan,d.transport_arranged_date,d.transport_details", FALSE);
		 $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );

		$this->db->from( 'dcs as d' );
		if ($segments['search_text']){
        	$this->db->where( $this->search_field . ' LIKE "%'. $segments['search_text'] .'%"' );
        }
		 $this->db->where('d.episode_id', $this->session->userdata('episode_id'));

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

			 return $this->db->count_all_results('dcs');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('dcs.plan'),
	'id' => lang('dcs.id'),
	'episode_id' => lang('dcs.episode_id'),
	'plan' => lang('dcs.plan'),
	'transport_arranged_date' => lang('dcs.transport_arranged_date'),
	'transport_details' => lang('dcs.transport_details')
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

        $metadata = $this->explain_table->parse( 'dcs' );

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
		$row['transport_arranged_date'] = formatDate( $row['transport_arranged_date'] , 'm/d/Y' );

		return $row;
	}
	
	
	
}
