<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * This is just a general placeholder controller
	 *
	 * It is a good idea, to create your users a page 
	 * to launch general functions or display some stats.
	 */
	public function index($navigation_file = 'default')
	{
		$this->load->library( 'template' ); 
		$this->load->helper( 'url' );
        $this->load->model( 'model_auth' );

        $this->logged_in = $this->model_auth->check( TRUE );
        $this->template->assign( 'logged_in', $this->logged_in );
        
		$this->template->assign( 'action_mode', 'dashboard');
   		$this->template->assign( 'template', 'dashboard' );
   		$this->template->assign( 'navigation_file', 'navigation_' . $navigation_file . '.tpl' );
   		$this->template->display( 'frame_admin.tpl' );
	}
}

/* End of file dasdhboard.php */
/* Location: ./application/controllers/dashboard.php */