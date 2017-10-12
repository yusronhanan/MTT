<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MTT404NotFound extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('in_model');
		$this->load->model('show_model');
		$this->load->model('user_model');
		// $this->load->helper('exportpdf_helper'); 
		// $this->load->library('Pagination');
		
	}

    public function index() 
    { 
        $this->output->set_status_header('404'); 
        $data['modallogin'] = 'notnull';
        $data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
        $data['main_view'] = 'MTT404'; // View name 
        $this->load->view('template',$data);//loading in my template 
    } 

}

/* End of file 404MTTNotFound.php */
/* Location: ./application/controllers/404MTTNotFound.php */