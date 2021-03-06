<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Patients extends MY_Controller 
{

	private $action = "";
	private $pagination_enabled = TRUE;
	private $pagination_per_page = 10;
	private $pagination_num_links = 5;
	private $total_rows = 0;
		
	private $segments = array();
	private $default_segments = array('sort_by'=>'mrn', 'sort_order'=>'asc', 'search_text'=>'', 'page'=>false );

	private $table_display_name = 'Patients' ;
	private $table_name = 'patients';
	private $frame_name = 'frame_admin.tpl';
	private $navigation_file = 'navigation_patients.tpl';
	
	function __construct()
	{
		parent::__construct();

		$this->load->model( 'model_patients' ); 
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
			redirect(base_url() . 'patients/patients/index' . uri_segments($this->segments) );
		}

		if (!isset($this->segments['sort_by'])) {
			if ( isset($this->session->userdata['uri_segments']['patients'] )) {
					$this->segments = $this->session->userdata['uri_segments']['patients'];
					$this->logToFile('steve.txt', 'After loading from session after a blank sort_by:' );
					$this->logToFile('steve.txt', print_r($this->segments, TRUE) );
					redirect(base_url() . 'patients/patients/index' . uri_segments($this->segments) );
			} else {
				$this->segments = fill_default_values($this->segments, $this->default_segments);
				$this->session->userdata['uri_segments']['patients'] = $this->segments;
				$this->session->sess_write();
				$this->logToFile('steve.txt', 'After saving to session after filling default values:' );
				$this->logToFile('steve.txt', print_r($this->session->userdata('patients_uri_segments'), TRUE) );
			}
		} else {
			$this->segments = fill_default_values($this->segments, $this->default_segments);
			$this->session->userdata['uri_segments']['patients'] = $this->segments;
			$this->session->sess_write();
			$this->logToFile('steve.txt', 'After saving to session from link with necessary defaults added:' );
			$this->logToFile('steve.txt', print_r($this->session->userdata('patients_uri_segments'), TRUE) );
		}

    	$this->action = "list";
		$this->template->assign( 'data', $this->model_patients->lister( $this->segments, $this->pagination_per_page ) );
		
		
		$this->template->assign( 'pager', $this->pager($this->segments) );
		$this->template->assign( 'partial_path', 'patients/patients' );
		$this->template->assign( 'uri_segments', uri_segments($this->segments) );
		$this->template->assign( 'segments', $this->segments);
		$this->template->assign( 'search_summary', 'Search for "' . $this->segments['search_text'] . '" matched with ' . $this->total_rows . ' record(s).' );

		$this->displayPage();
   }

    function show( $id )
    {
    	
		$this->action = "show";
		$this->template->assign( 'id', $id );
		$this->template->assign( 'data', $this->model_patients->get( $id ) );
		
		
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
                $this->model_patients->delete( $id );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;
 			case 'POST':
 				//delete from submit button on list using checked boxes
                $this->model_patients->delete( $this->input->post('delete_ids') );
                redirect( $_SERVER['HTTP_REFERER'] );
            break;
		}
	}
	
    protected function setRules()
	{
		//Do not forget to edit these.
		$this->load->library('form_validation');
						$this->form_validation->set_rules( 'first_name', lang('first_name'), 'required|max_length[20]' );
				$this->form_validation->set_rules( 'last_name', lang('last_name'), 'required|max_length[20]' );
				$this->form_validation->set_rules( 'middle_name', lang('middle_name'), '20' );
				$this->form_validation->set_rules( 'nick_alias', lang('nick_alias'), '40' );
				$this->form_validation->set_rules( 'mrn', lang('mrn'), 'required|max_length[20]' );
				$this->form_validation->set_rules( 'DOB', lang('DOB'), 'required' );
				$this->form_validation->set_rules( 'city', lang('city'), '20' );
				$this->form_validation->set_rules( 'state', lang('state'), '2' );
				$this->form_validation->set_rules( 'zip', lang('zip'), '5' );
				$this->form_validation->set_rules( 'phone', lang('phone'), '14' );


	}
	
	protected function getPostData($action)
	{
						$data_post['first_name'] = $this->input->post( 'first_name' );
				$data_post['last_name'] = $this->input->post( 'last_name' );
				$data_post['middle_name'] = $this->input->post( 'middle_name' );
				$data_post['nick_alias'] = $this->input->post( 'nick_alias' );
				$data_post['mrn'] = $this->input->post( 'mrn' );
				$data_post['DOB'] = MySQLDate( $this->input->post( 'DOB' ) );
				$data_post['city'] = $this->input->post( 'city' );
				$data_post['state'] = $this->input->post( 'state' );
				$data_post['zip'] = $this->input->post( 'zip' );
				$data_post['phone'] = $this->input->post( 'phone' );

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
		
		$this->template->assign( 'fields', $this->model_patients->fields( $includePrimaryIDfield ) );
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
			$this->model_patients->raw_data = TRUE;
			$this->template->assign( 'data', $this->model_patients->get( $id ) );
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
				
				$insert_id = $this->model_patients->insert( $data );
				$this->session->set_userdata('patient_id', $insert_id);

				redirect(base_url() . 'episodes/create' );
				break;
			case 'edit':
				$this->model_patients->update( $id, $this->getPostData('save') );
				redirect(base_url() . 'patients/patients/show/' . $id );   
				break;
		}	
	
	}
	
	protected function commonAssignments()
	{
		$this->setRelated();
		//ToDo: See if next line needs to be called if there is not an enum data set
		$this->template->assign( 'metadata', $this->model_patients->metadata() );
	}
	
	protected function setRelated()
	{
		
		

        
        
      
	}
	
	
	
			       

	protected function pager(){
		$pager = "";

        if( $this->pagination_enabled == TRUE )
        {
        	$this->total_rows = $this->model_patients->total_rows($this->segments['search_text']);
        	unset($this->segments['page']);
        	
            $config = array();
            $config['uri_segment'] = 9;
			$config['total_rows'] = $this->total_rows;
			$config['base_url'] = base_url() . 'patients/patients/index' .  uri_segments($this->segments) .  '/page/';
			
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
