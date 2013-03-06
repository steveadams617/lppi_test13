<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_episodes extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'episodes';
		
		//Remember to replace this:
		$this->search_field = 'patients.first_name';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the episodes table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",e.id,e.patient_id,e.team_id,e.oneliner,e.start_date,e.end_date,e.historyphysical" : ",e.id,concat(first_name, ' ', last_name) AS patient_id,teams.team AS team_id,e.oneliner,e.start_date,e.end_date,e.historyphysical";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('episodes  as e');
        $this->db->join( 'patients', 'patient_id = patients.id', 'left' );
$this->db->join( 'teams', 'team_id = teams.id', 'left' );


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
		$this->db->insert( 'episodes', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'episodes', $data );
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
		$this->db->delete( 'episodes' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',e.id,e.patient_id,e.team_id,e.oneliner,e.start_date,e.end_date,e.historyphysical');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",e.id,concat(first_name, ' ', last_name) AS patient_id,teams.team AS team_id,e.oneliner,e.start_date,e.end_date,e.historyphysical", FALSE);
		 $this->db->join( 'patients', 'patient_id = patients.id', 'left' );
$this->db->join( 'teams', 'team_id = teams.id', 'left' );

		$this->db->from( 'episodes as e' );
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
				$this->db->join( 'patients', 'patient_id = patients.id', 'left' );
				$this->db->join( 'teams', 'team_id = teams.id', 'left' );
				$this->db->like($this->search_field, $search_text); 
			}
			
			 return $this->db->count_all_results('episodes');
	}
	
	// Start add
	function patient_name($id) {
				$this->db->select( "concat(first_name, ' ', last_name) AS patient_name", FALSE );
				$this->db->join( 'patients', 'patient_id = patients.id', 'left' );
				$this->db->where('e.id', $id); 
				$this->db->from( 'episodes as e' );
				$query = $this->db->get();
				$result = $query->row_array();
				return $result['patient_name'];
	}
	// End add


    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('patients.first_name'),
	'id' => lang('episodes.id'),
	'patient_id' => lang('episodes.patient_id'),
	'team_id' => lang('episodes.team_id'),
	'oneliner' => lang('episodes.oneliner'),
	'start_date' => lang('episodes.start_date'),
	'end_date' => lang('episodes.end_date'),
	'historyphysical' => lang('episodes.historyphysical')
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

        $metadata = $this->explain_table->parse( 'episodes' );

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
		$row['start_date'] = formatDate( $row['start_date'] , 'm/d/Y' );
$row['end_date'] = formatDate( $row['end_date'] , 'm/d/Y' );

		return $row;
	}
	
	
	
}
