<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Episode_provider extends MY_Controller 
{

	private $action = "";
	private $pagination_enabled = TRUE;
	private $pagination_per_page = 10;
	private $pagination_num_links = 5;
	private $total_rows = 0;
		
	private $segments = array();
	private $default_segments = array('sort_by'=>'scheduled_mtg_frequency', 'sort_order'=>'asc', 'search_text'=>'', 'page'=>false );

	private $table_display_name = 'Episode_provider' ;
	private $table_name = 'episode_provider';
	private $frame_name = 'frame_admin.tpl';
	private $navigation_file = 'navigation_misc.tpl';
	
	function __construct()
	{
		parent::__construct();

		$this->load->model( 'model_episode_provider' ); 
		$this->load->helper('segment_array_helper');
		$this->load->library('session');
			
		
	}
	
	
    function logToFile($filename, $msg, $line_returns_after = 1)
	{ 
			$fd = fopen($filename, "a");
			fwrite( $fd, $msg . str_repeat("\n", $line_returns_after) );
			fclose($fd);
	} 
     
    function index()
    {
        $this->segments = $this->uri->uri_to_assoc(4);
		$this->logTofile( 'steve.txt', '----------------------------------------------------------------');
		$this->logTofile( 'steve.txt', 'When first to page:');
		$this->logToFile('steve.txt', print_r($this->segments, TRUE), 2 );
		
		if ($_SERVER ['REQUEST_METHOD']=='POST') {
			$button_value = $this->input->post('submit');
			
			switch ($button_value) {
				case 'search':
					$this->segments['search_text'] = $this->input->post('search_text');
					$this->segments['page'] = '';
					$this->logToFile('steve.txt', 'Segments to be redirected from search button:' );
					$this->logToFile('steve.txt', print_r($this->segments, TRUE) );
					break;
				case 'clear':
					$this->segments['search_text'] = '';
					$this->segments['page'] = '';
					$this->logToFile('steve.txt', 'Segments to be redirected from clear button:' );
					$this->logToFile('steve.txt', print_r($this->segments, TRUE) );
					break;
			}
			redirect(base_url() . 'misc/episode_provider/index' . uri_segments($this->segments) );
		}

		if (!isset($this->segments['sort_by'])) {
			if ( isset($this->session->userdata['uri_segments']['episode_provider'] )) {
					$this->segments = $this->session->userdata['uri_segments']['episode_provider'];
					$this->logToFile('steve.txt', 'After loading from session after a blank sort_by:' );
					$this->logToFile('steve.txt', print_r($this->segments, TRUE) );
					redirect(base_url() . 'misc/episode_provider/index' . uri_segments($this->segments) );
			} else {
				$this->segments = fill_default_values($this->segments, $this->default_segments);
				$this->session->userdata['uri_segments']['episode_provider'] = $this->segments;
				$this->session->sess_write();
				$this->logToFile('steve.txt', 'After saving to session after filling default values:' );
				$this->logToFile('steve.txt', print_r($this->session->userdata('episode_provider_uri_segments'), TRUE) );
			}
		} else {
			$this->segments = fill_default_values($this->segments, $this->default_segments);
			$this->session->userdata['uri_segments']['episode_provider'] = $this->segments;
			$this->session->sess_write();
			$this->logToFile('steve.txt', 'After saving to session from link with necessary defaults added:' );
			$this->logToFile('steve.txt', print_r($this->session->userdata('episode_provider_uri_segments'), TRUE) );
		}

    	$this->action = "list";
		$this->template->assign( 'data', $this->model_episode_provider->lister( $this->segments, $this->pagination_per_page ) );
		
		
		$this->template->assign( 'pager', $this->pager($this->segments) );
		$this->template->assign( 'partial_path', 'misc/episode_provider' );
		$this->template->assign( 'uri_segments', uri_segments($this->segments) );
		$this->template->assign( 'segments', $this->segments);
		$this->template->assign( 'search_summary', 'Search for "' . $this->segments['search_text'] . '" matched with ' . $this->total_rows . ' record(s).' );

		$this->displayPage();
   }

    function show( $id )
    {
    	
		$this->action = "show";
		$this->template->assign( 'id', $id );
		$this->template->assign( 'data', $this->model_episode_provider->get( $id ) );
		
		
		$this->displayPage();

    }

       
    function create( $id = false )
    {
		$this->action = "create";
		$this->commonFormTasks($id);
		$this->displayPage();
    }

    function edit( $id = false )
    {
		$this->action = "edit";
		$this->commonFormTasks($id);
		$this->displayPage();
    }

    function delete( $id = FALSE )
    {
        switch ( $_SERVER ['REQUEST_METHOD'] )
        {
            case 'GET':
            	//delete from an anchor on list
                $this->model_episode_provider->delete( $id );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;
 			case 'POST':
 				//delete from submit button on list using checked boxes
                $this->model_episode_provider->delete( $this->input->post('delete_ids') );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;
		}
	}
	
    protected function setRules()
	{
		//Do not forget to edit these.
		$this->load->library('form_validation');
						$this->form_validation->set_rules( 'provider_id', lang('provider_id'), 'required|max_length[11]|integer' );
				$this->form_validation->set_rules( 'total_collateral', lang('total_collateral'), '4' );
				$this->form_validation->set_rules( 'notify_at_dc', lang('notify_at_dc'), '4' );
				$this->form_validation->set_rules( 'dc_summary_requested', lang('dc_summary_requested'), '4' );
				$this->form_validation->set_rules( 'scheduled_mtg_frequency', lang('scheduled_mtg_frequency'), '40' );
				$this->form_validation->set_rules( 'actual_contact_frequency', lang('actual_contact_frequency'), '40' );


	}
	
	protected function getPostData($action)
	{
						$data_post['provider_id'] = $this->input->post( 'provider_id' );

						if ($action == 'showerror'){
							$data_post[ 'provider_id_auto' ] = $this->input->post( 'provider_id_auto' );
						}
 				$data_post['release_signed_date'] = $this->input->post( 'release_signed_date' );
				$data_post['next_appt_date'] = $this->input->post( 'next_appt_date' );
				$data_post['next_appt_time'] = $this->input->post( 'next_appt_time' );
				$data_post['last_collateral'] = $this->input->post( 'last_collateral' );
				$data_post['total_collateral'] = $this->input->post( 'total_collateral' );
				$data_post['dc_instructs_sent'] = $this->input->post( 'dc_instructs_sent' );
				$data_post['dc_summary_sent'] = $this->input->post( 'dc_summary_sent' );
				$data_post['notify_at_dc'] = $this->input->post( 'notify_at_dc' );
				$data_post['dc_summary_requested'] = $this->input->post( 'dc_summary_requested' );
				$data_post['scheduled_mtg_frequency'] = $this->input->post( 'scheduled_mtg_frequency' );
				$data_post['actual_contact_frequency'] = $this->input->post( 'actual_contact_frequency' );
				$data_post['last_patient_contact_date'] = $this->input->post( 'last_patient_contact_date' );
				$data_post['provider_relationship_memo'] = $this->input->post( 'provider_relationship_memo' );

		return $data_post;
	}
	
	
	protected function displayPage()
	{	
		$template = '';
		$includePrimaryIDfield = FALSE;
		unset($this->segments['id']);  //Still need this?
		
		switch ($this->action) {
			case 'list':
				$includePrimaryIDfield = TRUE;
				$this->template->assign( 'search_field_label', '%DEFAULT_SEARCH_LABEL%');
				$template = $this->action . '_' . $this->table_name;
				break;
			case 'show':
				$includePrimaryIDfield = TRUE;
				$template = $this->action . '_' . $this->table_name;
				break;
			default:
				$template = 'form_' . $this->table_name;
				break;
		
		}
		
		$this->template->assign( 'fields', $this->model_episode_provider->fields( $includePrimaryIDfield ) );
		$this->template->assign( 'controlling_filter_text',  ''  );
		$this->template->assign( 'table_name', $this->table_display_name );
		$this->template->assign( 'template', $template );
		$this->template->assign( 'navigation_file', $this->navigation_file ) ;
		$this->template->assign( 'action_mode', $this->action );
		$this->template->display( $this->frame_name );
	}
	
	protected function commonFormTasks($id)
	{
		switch ( $_SERVER ['REQUEST_METHOD'] )
		{
			case 'GET':
				$this->displayFormForEdit($id);
			break;
		
			case 'POST':
				$this->setRules();
		
				if ( $this->form_validation->run() == FALSE )
				{
						
					$this->redisplayFormWithErrors($id);
				}
				elseif ( $this->form_validation->run() == TRUE )
				{
					$this->saveFormData($id);
				}
			break;
		}
	}
	
	protected function displayFormForEdit($id){
		if ($this->action == "edit")
		{
			$this->model_episode_provider->raw_data = TRUE;
			$this->template->assign( 'data', $this->model_episode_provider->get( $id ) );
			$this->template->assign( 'record_id', $id );
		}
		
		$this->commonAssignments();
	}
	
	protected function redisplayFormWithErrors($id){
		if ($this->action == "edit")
		{
			$this->template->assign( 'record_id', $id );
		}
		
		$this->template->assign( 'errors', validation_errors() );
		$this->template->assign( 'data', $this->getPostData('showerror') );
		
		$this->commonAssignments();
	
	}
	
	protected function saveFormData($id){
		switch ($this->action) {
			case 'create':
				$data = $this->getPostData('save');
				$data['episode_id'] = $this->session->userdata( 'episode_id' );

				$insert_id = $this->model_episode_provider->insert( $data );
				
				redirect(base_url() . 'misc/episode_provider/show/' . $insert_id );
				break;
			case 'edit':
				$this->model_episode_provider->update( $id, $this->getPostData('save') );
				redirect(base_url() . 'misc/episode_provider/show/' . $id );   
				break;
		}	
	
	}
	
	protected function commonAssignments()
	{
		$this->setRelated();
		//ToDo: See if next line needs to be called if there is not an enum data set
		$this->template->assign( 'metadata', $this->model_episode_provider->metadata() );
	}
	
	protected function setRelated()
	{
		
		

        
        
      
	}
	
	
	
			       

	protected function pager(){
		$pager = "";

        if( $this->pagination_enabled == TRUE )
        {
        	$this->total_rows = $this->model_episode_provider->total_rows($this->segments['search_text']);
        	unset($this->segments['page']);
        	
            $config = array();
            $config['uri_segment'] = 9;
			$config['total_rows'] = $this->total_rows;
			$config['base_url'] = base_url() . 'misc/episode_provider/index' .  uri_segments($this->segments) .  '/page/';
			
			if ($this->segments['search_text']) {
				$config['uri_segment'] =  $config['uri_segment'] + 2;  
			}

            $config['cur_tag_open'] = '<span class="current">';
            $config['cur_tag_close'] = '</span>';
            $config['per_page']    = $this->pagination_per_page;
            $config['num_links']   = $this->pagination_num_links;

            $this->load->library('pagination');
            $this->pagination->initialize($config);
            $pager = $this->pagination->create_links();       
        }
        return $pager;
    }
        
        
	
}
