<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_episode_provider extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'episode_provider';
		
		//Remember to replace this:
		$this->search_field = 'scheduled_mtg_frequency';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the episode_provider table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",e.id,provider_id,provider.first_name AS provider_id_auto,e.episode_id,e.release_signed_date,e.next_appt_date,e.next_appt_time,e.last_collateral,e.total_collateral,e.dc_instructs_sent,e.dc_summary_sent,e.notify_at_dc,e.dc_summary_requested,e.scheduled_mtg_frequency,e.actual_contact_frequency,e.last_patient_contact_date,e.provider_relationship_memo" : ",e.id,provider.first_name AS provider_id,episodes.start_date AS episode_id,e.release_signed_date,e.next_appt_date,e.next_appt_time,e.last_collateral,e.total_collateral,e.dc_instructs_sent,e.dc_summary_sent,e.notify_at_dc,e.dc_summary_requested,e.scheduled_mtg_frequency,e.actual_contact_frequency,e.last_patient_contact_date,e.provider_relationship_memo";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('episode_provider  as e');
        $this->db->join( 'provider', 'provider_id = provider.id', 'left' );
$this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );


		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'e.id', $id );
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
		$this->db->insert( 'episode_provider', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'episode_provider', $data );
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
		$this->db->delete( 'episode_provider' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',e.id,provider_id,provider.first_name AS provider_id_auto,e.episode_id,e.release_signed_date,e.next_appt_date,e.next_appt_time,e.last_collateral,e.total_collateral,e.dc_instructs_sent,e.dc_summary_sent,e.notify_at_dc,e.dc_summary_requested,e.scheduled_mtg_frequency,e.actual_contact_frequency,e.last_patient_contact_date,e.provider_relationship_memo');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",e.id,provider.first_name AS provider_id,episodes.start_date AS episode_id,e.release_signed_date,e.next_appt_date,e.next_appt_time,e.last_collateral,e.total_collateral,e.dc_instructs_sent,e.dc_summary_sent,e.notify_at_dc,e.dc_summary_requested,e.scheduled_mtg_frequency,e.actual_contact_frequency,e.last_patient_contact_date,e.provider_relationship_memo", FALSE);
		 $this->db->join( 'provider', 'provider_id = provider.id', 'left' );
$this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );

		$this->db->from( 'episode_provider as e' );
		if ($segments['search_text']){
        	$this->db->where( $this->search_field . ' LIKE "%'. $segments['search_text'] .'%"' );
        }
		 $this->db->where('e.episode_id', $this->session->userdata('episode_id'));

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
				$this->db->join( 'provider', 'provider_id = provider.id', 'left' );
$this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );

				$this->db->like($this->search_field, $search_text); 
			}
			$this->db->where('episode_id', $this->session->userdata('episode_id'));

			 return $this->db->count_all_results('episode_provider');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('episode_provider.scheduled_mtg_frequency'),
	'id' => lang('episode_provider.id'),
	'provider_id' => lang('episode_provider.provider_id'),
	'episode_id' => lang('episode_provider.episode_id'),
	'release_signed_date' => lang('episode_provider.release_signed_date'),
	'next_appt_date' => lang('episode_provider.next_appt_date'),
	'next_appt_time' => lang('episode_provider.next_appt_time'),
	'last_collateral' => lang('episode_provider.last_collateral'),
	'total_collateral' => lang('episode_provider.total_collateral'),
	'dc_instructs_sent' => lang('episode_provider.dc_instructs_sent'),
	'dc_summary_sent' => lang('episode_provider.dc_summary_sent'),
	'notify_at_dc' => lang('episode_provider.notify_at_dc'),
	'dc_summary_requested' => lang('episode_provider.dc_summary_requested'),
	'scheduled_mtg_frequency' => lang('episode_provider.scheduled_mtg_frequency'),
	'actual_contact_frequency' => lang('episode_provider.actual_contact_frequency'),
	'last_patient_contact_date' => lang('episode_provider.last_patient_contact_date'),
	'provider_relationship_memo' => lang('episode_provider.provider_relationship_memo')
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

        $metadata = $this->explain_table->parse( 'episode_provider' );

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
