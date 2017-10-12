<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('in_model');
		$this->load->model('show_model');
	}

	public function index()
	{
		
	}

	public function Profile(){
		$data['main_view']='profile';
		$this->load->view('template',$data);
	}
	public function Edit_profile(){
		$data['main_view']='edit_profile';
		$this->load->view('template',$data);
	}

}

/* End of file user.php */
/* Location: ./application/controllers/user.php */