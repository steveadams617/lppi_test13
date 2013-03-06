<?php

class MY_Controller extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library( 'template' ); 
		
        $this->load->model( 'model_auth' );
		$this->logged_in = $this->model_auth->check( TRUE );
        $this->template->assign( 'logged_in', $this->logged_in );
        
        $this->load->helper( array('language','url', 'dbdates' )); 
        $this->lang->load( 'db_fields', 'english' ); // This is the language file

	}

}

