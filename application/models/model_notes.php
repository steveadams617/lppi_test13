<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_notes extends CI_Model 
{
    function __construct()
    {
        parent::__construct();
 
		$this->load->database();
		$this->load->helper('dbdates');
		$this->load->library('session');
		$this->table_name = 'notes';
		
		//Remember to replace this:
		$this->search_field = 'body';

		
		$this->meta = array();

        /**
		 *    bool $this->raw_data		
		 *    Used to decide what data should the SQL queries retrieve if tables are joined
		 *     - TRUE:  just the field names of the notes table
		 *     - FALSE: related fields are replaced with the forign tables values
		 *    Triggered to TRUE in the controller/edit method		 
		 */
        $this->raw_data = FALSE;  
    }

	function get ( $id, $get_one = false )
	{
        
	    $select_statement = ( $this->raw_data ) ? ",n.id,n.episode_id,n.user_id,n.body,n.printed,n.include_plan,n.note_date,n.note_time,n.status_id" : ",n.id,episodes.start_date AS episode_id,users.first_name AS user_id,n.body,n.printed,n.include_plan,n.note_date,n.note_time,n.status_id";
		$this->db->select( $select_statement, FALSE );
		$this->db->from('notes  as n');
        $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );
$this->db->join( 'users', 'user_id = users.id', 'left' );


		// Pick one record
		// Field order sample may be empty because no record is requested, eg. create/GET event
		if( $get_one )
        {
            $this->db->limit(1,0);
        }
		else // Select the desired record
        {
            $this->db->where( 'n.id', $id );
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
		$this->db->insert( 'notes', $data );
		return $this->db->insert_id();
	}
	


	function update ( $id, $data )
	{
		$this->db->where( 'id', $id );
		$this->db->update( 'notes', $data );
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
		$this->db->delete( 'notes' );
		
	}


function lister ( $segments, $perPage )
	{
		
		$sort_order = ($segments['sort_order'] == 'desc') ? 'desc' : 'asc';
		$sort_columns = array(',n.id,n.episode_id,n.user_id,n.body,n.printed,n.include_plan,n.note_date,n.note_time,n.status_id');
		$sort_by = (in_array($segments['sort_by'], $sort_columns)) ? $segments['sort_by'] : 'id';
	    
	    $this->db->start_cache();
		$this->db->select( ",n.id,episodes.start_date AS episode_id,users.first_name AS user_id,n.body,n.printed,n.include_plan,n.note_date,n.note_time,n.status_id", FALSE);
		 $this->db->join( 'episodes', 'episode_id = episodes.id', 'left' );
$this->db->join( 'users', 'user_id = users.id', 'left' );

		$this->db->from( 'notes as n' );
		if ($segments['search_text']){
        	$this->db->where( $this->search_field . ' LIKE "%'. $segments['search_text'] .'%"' );
        }
		 $this->db->where('n.episode_id', $this->session->userdata('episode_id'));

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
$this->db->join( 'users', 'user_id = users.id', 'left' );

				$this->db->like($this->search_field, $search_text); 
			}
			$this->db->where('episode_id', $this->session->userdata('episode_id'));

			 return $this->db->count_all_results('notes');
	}





    /**
     *  Some utility methods
     */
    function fields( $withID = FALSE )
    {
        $fs = array(
	'search_field' => lang('notes.body'),
	'id' => lang('notes.id'),
	'episode_id' => lang('notes.episode_id'),
	'user_id' => lang('notes.user_id'),
	'body' => lang('notes.body'),
	'printed' => lang('notes.printed'),
	'include_plan' => lang('notes.include_plan'),
	'note_date' => lang('notes.note_date'),
	'note_time' => lang('notes.note_time'),
	'status_id' => lang('notes.status_id')
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

        $metadata = $this->explain_table->parse( 'notes' );

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
		$row['note_date'] = formatDate( $row['note_date'] , 'm/d/Y' );

		return $row;
	}
	
	
	
}
