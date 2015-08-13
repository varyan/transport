<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends User{

	/**
	 * Constructor function
	 * */
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	public function index(){
		if(($this->session->userdata('is_logged_in'))) {
			$this->welcome();
		}else{
			redirect(base_url());
		}
	}

	/**
	 * User welcome function
	 * */
	public function welcome(){
		$data = [
			'title' => 'Welcome',
			'user'	=> $this->session->userdata('user'),
		];
		$this->load->view('header_view',$data);
		$this->load->view('welcome_view.php', $data);
		$this->load->view('footer_view',$data);
	}

	/**
	 * User logout function
	 * */
	public function logout(){
		$newdata = array(
			'user_id'   =>'',
			'user_name'  =>'',
			'user_email'     => '',
			'logged_in' => FALSE,
		);
		$this->session->unset_userdata($newdata );
		$this->session->sess_destroy();
		redirect(base_url());
	}

	public function profile(){

	}
}