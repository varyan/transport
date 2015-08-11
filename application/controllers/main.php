<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Constructor
	 * */
	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$data['content'] = 'index';
		$this->load->view('pages/templates/content',$data);
	}

	/**
	 * Destructor
	 * */
	public function __destruct(){
		unset($this);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */