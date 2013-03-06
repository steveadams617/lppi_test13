<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class table_comment{

    public function __construct()
    {
        $this->ci =& get_instance();
	}

	function parse( $table )
	{
	    
	     $query = $this->ci->db->query( "SHOW TABLE STATUS where name='$table'");
	     $result = $query->result_array();
	     $comment = $result[0]['Comment'];

        return $comment;
    }
    
    function extract_directory( $comment )
    {
        $ret = explode( '|', $comment );
        return $ret[0];
    }

}
/**
		$this->load->database();
		$this->load->library('table_comment');

		$comment = $this->table_comment->parse( 'sf_config' );
		
		echo $comment;
		exit;

**/