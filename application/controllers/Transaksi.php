<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('in_model');
		$this->load->model('show_model');
	}
	public function index()
	{
		
	}


	public function Cartin(){
		$id= $this->input->post('id');
		$merchant = $this->input->post('merchant');
		$jumlah = $this->input->post('jumlah');
        $result = $this->in_model->Add_cart($id, $merchant, $jumlah);
        echo $result;
	}

	public function Discussdel(){
		$id= $this->input->post('id');
        $result = $this->in_model->Delete_discussdel($id);
        echo $result;
	}

	
	public function CekFavorite(){
		$id= $this->input->post('id');
        $result = $this->in_model->Cek_favorite($id);
        echo $result;
	}

	public function Merchant_favorite(){
		$id= $this->input->post('id');
        $result = $this->in_model->Merchant_favorite($id);
        echo $result;
	}
	public function Merchant_favoritedel(){
		$id= $this->input->post('id');
        $result = $this->in_model->Merchant_favoritedel($id);
        echo $result;
	}

	public function Wishproductin(){
		$id= $this->input->post('id');
        $result = $this->in_model->Add_wishproduct($id);
        echo $result;
	}

	public function UpAmount(){
		$id= $this->input->post('id');
		$amount =$this->input->post('amount');
        $result = $this->in_model->UpAmount($id, $amount);
        echo $result;
	}

	public function Cartdel(){
		$id= $this->input->post('id');
        $result = $this->in_model->Delete_cart($id);
        echo $result;
	}
	public function Wishproductdel(){
		$id= $this->input->post('id');
        $result = $this->in_model->Delete_wishproduct($id);
        echo $result;
	}
	public function Orderdel(){
		$id= $this->input->post('id');
		$last_update = $this->input->post('last_update');
        $result = $this->in_model->Cancel_order($id,$last_update);
        echo $result;
	}

	public function	Orderselesai(){
		$id= $this->input->post('id');
		$feedback = $this->input->post('feedback');
		$last_update = $this->input->post('last_update');
		$emotion = $this->input->post('emotion');
        $result = $this->in_model->Order_Selesai($id,$last_update,$feedback,$emotion);
        echo $result;

	}

	public function paymentslip(){
		$order_detail = $this->input->post('order_detail');
		// $data['amountorder'] = $this->show_model->AmountOrder();
		// $data['main_view']='paymentslip';
		// $data['amountCart']=count($this->show_model->GetDataCart());
		if (!empty($order_detail)) {
		$data['list_payment']= $this->show_model->GetDataInvoice($order_detail);
		$this->load->view('paymentslip', $data);
		}
		else{
			$this->session->set_flashdata('notif_log_password', 'Maaf data invoice anda kosong');
			redirect('Page/OrderSelesai','refresh');
			
		}
	}

	public function InsertCheckout(){

			if ($this->input->post('submit')) {

	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	$this->form_validation->set_rules('name', 'Nama', 'trim|required');
	$this->form_validation->set_rules('address', 'Alamat', 'trim|required');
	$this->form_validation->set_rules('phone', 'No. HP', 'trim|required|numeric|max_length[12]');
	$this->form_validation->set_rules('id_user', 'ID User', 'trim|required');
	// $this->form_validation->set_rules('comment', 'Keterangan', 'trim|required');
	$this->form_validation->set_rules('shipping', 'Shipping', 'trim|required');
	$this->form_validation->set_rules('date_ship', 'Date Ship', 'trim|required');
	$this->form_validation->set_rules('random', 'Random', 'trim|required');
	$this->form_validation->set_rules('date_buy', 'Tanggal Windows anda tidak valid', 'trim|required');


			if ($this->form_validation->run() == TRUE) {
			 		if ($this->in_model->Insert_checkout()==TRUE) 
			 		{
				if ($this->session->userdata('logged_in') == true) {
				$code = $this->input->post('random');
				$order_id = $this->in_model->GetData(['code'=>$code,'user_id'=>$this->session->userdata('logged_id')],'product_order')->row('id');
				redirect('https://jualbelimtt.com/pages/payment_web.php?orderid='.$order_id);
        }
			 	}
			 	
			 	else{
			 	if ($this->session->userdata('logged_in') == true) {
				$this->session->set_flashdata('notif', 'Maaf Checkout anda gagal');
				redirect('pagein/checkout');
        		
        }
			 	}
			 } else {
			 	if ($this->session->userdata('logged_in') == true) {
				$this->session->set_flashdata('notif', validation_errors());
				redirect('pagein/checkout');
		 	
        		
        }
			  	
			  	
			  } 
		}
		else{
			if ($this->session->userdata('logged_in') == true) {
				$id=$this->session->userdata('logged_id');
				$data['user']= $this->show_model->GetData(array("id"=>$id),'user_merchant');
				$data['list_keranjang']= $this->show_model->GetDataKeranjang();
            	$data['main_view']= 'checkout';
				$this->load->view('template_null',$data);
        		
        }
        else{
        	$this->session->set_flashdata('notif_log_password', 'Maaf anda harus login terlebih dahulu');
				redirect('page');
        }
		}
	}


}

/* End of file transaksi.php */
/* Location: ./application/controllers/transaksi.php */