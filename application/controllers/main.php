<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * private array $data
	 * */
	private $data = [];

	/**
	 * Constructor
	 * */
	public function __construct(){
		parent::__construct();
		$this->default_actions();
		$this->config->set_item('language','english');
	}

	/**
	 * Pages function load
	 * @param string $page (default value index)
	 * */
	public function load($page = 'index'){
		if( ! file_exists(APPPATH.'views/pages/'.$page.'.php')){
			show_404();
		}
		$this->data['content'] = $page;
		$this->load->view('pages/templates/content',$this->data);
	}

	/**
	 * Destructor
	 * */
	public function __destruct(){
		unset($this);
	}

	/**
	 * Pages private function default_actions
	 * */
	private function default_actions(){
		$this->load->model('main_model');
		$this->data = array(
			'languages'=>$this->main_model->get_languages(),
		);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */