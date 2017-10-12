<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagein extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('in_model');
		$this->load->model('show_model');
		$this->load->model('user_model');
	}
	public function index()
	{
		
	}

	public function unseen_notification(){
		$view = $this->input->post('view');
		if ($view == 'view') {
			$output = '';
			$result=$this->show_model->notification();
			if(!empty($result)){
				
				
				foreach ($result as $notification) {

					if ($notification->type_notification == 'diskusi') {
						$link = base_url().'page/detail_product/'.$notification->product_id;
					}
					// else if ($notification->type_notification == 'order_waiting') {
					// 	$link = base_url().'Page/OrderAnda';
					// }
					else if ($notification->type_notification == 'order_process') {
						$link = base_url().'page/OrderAnda';
					}
					else if ($notification->type_notification == 'order_finish') {
						$link = base_url().'page/OrderSelesai';
					}
					else if ($notification->type_notification == 'order_cancel') {
						$link = base_url().'page/OrderCancel';
					}

				$output .= '
				 <a href="'.$link.'" target="_blank" style="color:black">
				<li>
               
                  <span class="item">
                    <span class="item-left">
<span class="item-info">
                            <span>
                             <strong>'.$notification->subject.' </strong>
                            </span>
                            <span>
                        	'.$notification->text.'

                            	</span>
                        </span>
                    </span>
                    
                </span>
                
              </li>
              </a>
				';	

				}
				$output .= '<li class="divider"></li>
              <li><a class="text-center" href="'.base_url().'pagein/MyProfile">Lihat Semua Notifikasi</a></li>';
			}
			else{
				$output .= '<li class="text-center" >Tidak ada notifikasi terbaru</li>';
				}
			$count = count($this->show_model->unseen_notification());
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );
			echo $output.'|'.$count;

		}
		else if($view == 'notification_null'){
				$result	= $this->in_model->nullNotification();
					if ($result == TRUE) {
						$count = '';
					}
					else{
						$count = count($this->show_model->unseen_notification());
					}
			echo $count;
		}
		
	}

	public function mini_status(){
		$view = $this->input->post('view');
		if ($view == 'view') {
			$output = '';

			$result=$this->show_model->notification();
			if(!empty($result)){

					
				$count = 0;	
				foreach ($result as $notification) {

				if ($notification->type_notification != 'diskusi') {
				
					if ($notification->type_notification == 'order_waiting') {
						$link = base_url().'Page/OrderAnda';
					}
					else if ($notification->type_notification == 'order_process') {
						$link = base_url().'page/OrderAnda';
					}
					else if ($notification->type_notification == 'order_finish') {
						$link = base_url().'page/OrderSelesai';
					}
					else if ($notification->type_notification == 'order_cancel') {
						$link = base_url().'page/OrderCancel';
					}
				if ($notification->type_notification == 'order_waiting') {
					$count++;
				}
				else if ($notification->type_notification == 'order_process') {
					$count++;
				}
				
				$output .= '
				 <a href="'.$link.'" target="_blank" style="color:black">
				<li>
               
                  <span class="item">
                    <span class="item-left">
<span class="item-info">
                            <span>
                             <strong>'.$notification->subject.' </strong>
                            </span>
                            <span>
                        	'.$notification->text.'

                            	</span>
                        </span>
                    </span>
                    
                </span>
                
              </li>
              </a>
				';	
				}
				
				}
				if ($output != '') {
					$output .= '<li class="divider"></li>
              <li><a class="text-center" href="'.base_url().'page/OrderAnda">Lihat Order Anda</a></li>';
				}
				else{
					$output .= '<li class="text-center" >Anda Tidak Punya Order Baru</li>
					<li class="divider"></li>
              <li><a class="text-center" href="'.base_url().'page/OrderAnda">Lihat Order Anda</a></li>';
				}
				
			}
			else{
				$output .= '<li class="text-center" >Anda Tidak Punya Order Baru</li>';
				}
			// $data = array(
			// 	'notification' => $output,
			// 	'amountNotifikasi' => $count
			// );
			echo $output.'|'.$count;

		}
		
		
	}

	public function Checkout(){
		
		if ($this->session->userdata('logged_in') == true) {
			$id=$this->session->userdata('logged_id');
			$data['user']= $this->show_model->GetData(array("id"=>$id),'user_merchant');
			$data['list_keranjang']= $this->show_model->GetDataKeranjang();
			// $data['amountorder'] = $this->show_model->AmountOrder();
			if (!empty($this->show_model->GetDataKeranjang())) {
		   	$data['main_view']= 'checkout';
			$this->load->view('template_null',$data);
		   }else{
       
			$this->session->set_flashdata('notif_log_password', 'Maaf, keranjang anda kosong');
       
        	redirect('page');
        }
            
        }else{
       
			$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
       
        	redirect('page');
        }
		
	}

	public function MyProfile(){
		
		if ($this->session->userdata('logged_in') == true) {
			$id=$this->session->userdata('logged_id');
			$data['list_cart']= $this->show_model->GetDataCart();
			// $data['amountorder'] = $this->show_model->AmountOrder();
			$data['amountCart']=count($this->show_model->GetDataCart());
			$data['user']= $this->show_model->GetData(array("id"=>$id),'user_merchant');
			$data['countNotification']=count($this->show_model->GetDataNotification());
			$data['notification']=$this->show_model->GetDataNotification();
			
            $data['main_view']= 'Profile';
			$this->load->view('template',$data);
        }else{
       		$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
       
        	redirect('page');
        }
		
	}

	public function EditProfile(){
if ($this->session->userdata('logged_in') == true) {


	$this->form_validation->set_rules('name', 'Nama', 'trim|required');
	$this->form_validation->set_rules('username', 'Username', 'trim|required');
	$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
	$this->form_validation->set_rules('email', 'Email', 'trim|required');
	$this->form_validation->set_rules('address', 'Address', 'trim|required');
	$this->form_validation->set_rules('location', 'Location', 'trim|required');
	$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
			if ($this->form_validation->run() == TRUE) {
					
 		if ($this->user_model->Edit_profile() ==TRUE) 
	 		{
	 		$this->session->set_flashdata('notif_log_password',  'Update Profile anda berhasil');
                        redirect('Pagein/MyProfile');
	 	}
	 	
	 	else{
	 		$this->session->set_flashdata('notif_log_password',  'Maaf Password anda salah');
                        redirect('Pagein/MyProfile');
	 	}
			
		}
		else{
			$this->session->set_flashdata('notif_log_password',  validation_errors());
                        redirect('Pagein/MyProfile');
			 	}
		
	}else{
		$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
       
        	redirect('Auth');
        }
 }
 public function EditProfilePhoto(){
  if ($this->session->userdata('logged_in') == true) {
      
            // $this->form_validation->set_rules('last_update', 'Data Tanggal', 'trim|required');

                $config['upload_path'] = './assets/images';
                $config['allowed_types'] = 'jpg|png';
                $config['max_size']  = '2000';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('fotoprofile')){
            // if ($this->form_validation->run() == TRUE ) {
                // $password = $this->input->post('password');
                // $password2 = $this->input->post('password2');

                // if ($password == $password2) {
                    if ($this->user_model->updatefoto_user_merchant($this->upload->data()) == TRUE) {
                        // jika sukses
                        $this->session->set_flashdata('notif_log_password', 'Update foto profile anda berhasil');
                        redirect('Pagein/MyProfile');
                    } else {
                        $this->session->set_flashdata('notif_log_password', 'Maaf, Update foto profile anda gagal');
                        redirect('Pagein/MyProfile');
                    }
            // } else {
            //     // jika gagal
              
            //    		 $this->session->set_flashdata('notif_log_password',  $this->upload->validation_errors());
            //             redirect('Pagein/MyProfile');
            // }
        }
            else {
            	$notif = $this->upload->display_errors();
                $this->session->set_flashdata('notif_log_password',  $notif);
                        redirect('Pagein/MyProfile');
             } 
            
    }else {
        $this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
        redirect('page');
    }
 }

    



 		public function discussion(){
 


	// $this->form_validation->set_rules('tgl_transaksi', 'Tanggal Bergabung', 'trim|required');
		$product_id = $this->input->post('product_id');
		$merchant_id = $this->input->post('merchant_id');
		$comment = $this->input->post('addComment');
       
			
 		if ($this->in_model->Add_discuss($product_id,$merchant_id,$comment)=="true") 
 		{	
	
			$this->session->set_flashdata('notif_log_password', 'Selamat, anda berhasil menambahkan komentar');
       
			redirect('Page/detail_product/'.$product_id);	
			}
	 	
	 	else{
	 		$this->session->set_flashdata('notif_log_password', 'Maaf, anda gagal menambahkan komentar');
       
			redirect('Page/detail_product/'.$product_id);
	 	}
			
		
	

    }
		

 	public function wishlist(){
 		if ($this->session->userdata('logged_in') == true) {
 		$wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}
		$data['product_validation'] = $product_validation;
 		$data['list_cart']= $this->show_model->GetDataCart();
 		// $data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
 		$data['list_wish']= $this->show_model->GetDataWishlist();
 		$data['main_view']= 'wishlist';
		$this->load->view('template',$data);
	} else{
			$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu');
       
		redirect('Page');
	}
 	}

 	public function merchantfavorite(){
 		if ($this->session->userdata('logged_in') == true) {
 		$favorited= $this->show_model->GetDataMerchantFavorite();
		$user_validation = array();
		foreach ($favorited as $favor) {
			$user_validation[] = $favor->merchant_id;
		}

		$data['user_validation']= $user_validation;
 		// $data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		$data['list_merchant']= $this->show_model->GetDataMerchantFavorite();
		
		$data['main_view']='merchant_favorite';

		$this->load->view('template', $data);
	} else{
		$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu');
       
		redirect('Page');
	}
}
}

/* End of file pagein.php */
/* Location: ./application/controllers/pagein.php */