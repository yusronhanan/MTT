<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('in_model');
		$this->load->model('show_model');
		$this->load->helper('exportpdf_helper'); 
		$this->load->library('Pagination');
		
	}
	public function index()
	{	
		$wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}

	
		$data = [
			'product_validation' => $product_validation,
            'main_view' => 'home',
            //'nama'      => $this->session->userdata('logged_name'),
            'amountorder' => $this->show_model->AmountOrder(),
            'amountCart'  => count($this->show_model->GetDataCart()),
            'list_cart' => $this->show_model->GetDataCart(),
            'list_tso' => $this->show_model->GetDataProdukHome('11'),
            'list_kesehatan' => $this->show_model->GetDataProdukHome('12'),
            'list_snack' => $this->show_model->GetDataProdukHome('13'),
            'list_buku' => $this->show_model->GetDataProdukHome('17'),
            'list_fashion' => $this->show_model->GetDataProdukHome('15'),
          	//  'active'    => 'kategoriapas'
        ];
		$this->load->view('template', $data);

	}
	


	

	
	public function Fullcategory(){
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['main_view']='fullcategory';
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		$this->load->view('template', $data);
	}
	public function Help(){
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['list_cart']= $this->show_model->GetDataCart();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['main_view']='help';
		$this->load->view('template', $data);
	}
	public function Contactus(){
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['list_cart']= $this->show_model->GetDataCart();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['main_view']='contact';
		$this->load->view('template', $data);
	}



	
	public function Hotlist_Product(){
		$keyword = $this->input->post('keyword');
		$data = [
			'keyword' => $keyword,
			'amountorder' => $this->show_model->AmountOrder(),
			'list_cart' => $this->show_model->GetDataCart(),
			'amountCart'  => count($this->show_model->GetDataCart()),
            'main_view' => 'hotlist_produk',
            //'nama'      => $this->session->userdata('logged_name'),
            'list_product' => $this->show_model->GetSearchData(array("product.name LIKE"=>"%".$keyword."%")) 
          	//  'active'    => 'kategoriapa'
          	
        ];
		$this->load->view('template', $data);
	}

	public function Search(){
		$search=  $this->input->post('search');
  		$query = $this->show_model->searchProduct($search);
  		echo json_encode ($query);
	}
	public function ajaxsearch()
    {
      
       if(is_null($this->input->get('id')))
        {
        	$data['main_view']='input';
        $this->load->view('template', $data);    
		
        
        }
        else
        {
        $this->load->model('show_model'); 
        
        $data['booktable']=$this->show_model->searchProduct($this->input->get('id')); 
             	$data['main_view']='output';
        $this->load->view('template', $data);
        }
        
       
    }

    public function hotlist(){
    	$keyword = 'kurma';
    	$data['amountorder'] = $this->show_model->AmountOrder();
    	$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
    	$data['main_view']='hotlist';
    	$data['list_product'] = $this->show_model->GetSearchData(array("product.name LIKE"=>"%".$keyword."%")) ;
		$this->load->view('template', $data);
    }
    public function filter_product(){
    $keyword = $this->input->get('keyword');


 

    $searchby = $this->input->get('searchby');
    $category = $this->input->get('category');
    
    $minimum  = $this->input->get('minimum');
    $maksimum = $this->input->get('maksimum');
    $order_by = $this->input->get('order_by');

    $favorited= $this->show_model->GetDataMerchantFavorite();
		$user_validation = array();
		foreach ($favorited as $favor) {
			$user_validation[] = $favor->merchant_id;
		}

    $wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}
    if ($order_by == "new") {
    	$urutkan = array('product.id'=>'DESC');
    }
    else if ($order_by == "asc_price") {
    	$urutkan = array('product.price'=>'ASC');
    }
    else if ($order_by == "desc_price") {
    	$urutkan = array('product.price'=>'DESC');
    }

    if (empty($minimum)) {
    	$minimum = 0;
    }
    if (empty($maksimum)) {
    	$maksimum = $this->show_model->GetMAXprice();
    }
	$list_filter ='';
	$list_merchant ='';
    
    if ($category == '') {
    	$list_filter= $this->show_model->GetSearchData(array("product.name LIKE"=>"%".$keyword."%"));
    	$list_merchant=$this->show_model->GetDataSearchMerchant(array("user_merchant.name LIKE"=>"%".$keyword."%"));;
    }
    else if ($searchby == "merchant") {
    $list_merchant=$this->show_model->GetDataSearchMerchant(array("user_merchant.name LIKE"=>"%".$keyword."%"));;
    }
	else if ($searchby == "product" && $category != 'all') {
	$list_filter= $this->show_model->GetFilterProduk(array("product_category.category_id"=>$category,"product.name LIKE"=>"%".$keyword."%"),$urutkan, $minimum, $maksimum);
	}
	else if($searchby == "product" && $category == 'all'){
	$list_filter= $this->show_model->GetFilterProduk('all',$urutkan, $minimum, $maksimum);
	}
	
    $data = [
    		'user_validation' =>  $user_validation,
			'list_kategori'	=> $this->show_model->GetAllData('category'),
			'product_validation' => $product_validation,
			'amountorder' => $this->show_model->AmountOrder(),
			'list_cart' => $this->show_model->GetDataCart(),
			'amountCart'  => count($this->show_model->GetDataCart()),
			'category_id' => $category,
			'order_by' => $order_by,
			'search_by' =>$searchby,
			'minimum' => $this->input->get('minimum'),
			'maksimum' => $this->input->get('maksimum'),
            'main_view' => 'category_product',
            'detail'=> $category,
            'keyword' => $keyword,
            'list_product' => $list_filter,
            'list_merchant' => $list_merchant,

        ];
		$this->load->view('template', $data);
		
    }


	public function Category_product(){
		$category_id = $this->uri->segment(3);
		$wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}
		$data = [
			'list_kategori'	=> $this->show_model->GetAllData('category'),
			'product_validation' => $product_validation,
			'amountorder' => $this->show_model->AmountOrder(),
			'list_cart' => $this->show_model->GetDataCart(),
			'amountCart'  => count($this->show_model->GetDataCart()),
			'category_id' => $category_id,
            'main_view' => 'category_product',
            'detail'=> $category_id,
            'list_product' => $this->show_model->GetKategoriData(array("product_category.category_id"=>$category_id),array('product.id'=>'DESC')),

        ];
		$this->load->view('template', $data);
	}
	
	public function Detail_product(){
		$where = $this->uri->segment(3);
		$wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}
		$data = [
			'amountorder' => $this->show_model->AmountOrder(),	
			'amountCart'  => count($this->show_model->GetDataCart()),
			'product_validation' => $product_validation,
			'list_cart' => $this->show_model->GetDataCart(),
			// 'list_rekomendasi' => $this->show_model->GetDataProdukHome($rekomendasi),
			'detail'=> $this->show_model->GetDetailProduct($where),
			'main_view' => 'detail',
			'list_discussion' => $this->show_model->GetDiscussion($where),
		];
		$this->load->view('template', $data);
	}

	public function Cart(){
		if ($this->session->userdata('logged_in') == true) {

		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart'	]= $this->show_model->GetDataCart();
		$data['list_keranjang']= $this->show_model->GetDataKeranjang();
		$data['main_view']='keranjang';
		$this->load->view('template', $data);
		}else{
			$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
        	redirect('page');
        }
	}
	public function OrderAnda($offset = NULL){
	if ($this->session->userdata('logged_in') == true) {

		$status ="Pesanan ditujukan ke Merchant";
		$statuscancel ="Order Dibatalkan";
		$statusselesai ="Selesai";
		$this->load->library('Pagination');
		$limit = 5	;
		if(!is_null($offset))
		{
			$offset = $this->uri->segment(3);
		}
		$this->load->library('Pagination');
		$config['uri_segment'] = 3;
		$config['base_url'] = base_url().'index.php/Page/OrderAnda';
		$config['total_rows'] = $this->show_model->Total_Records_Status($status);
		$config['per_page'] = $limit;
		$config['num_links'] = 3;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		//$data['list_selesai']= $this->show_model->GetFinishOrder($statusselesai,$limit,$offset);
		$this->pagination->initialize($config);
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		// $data['list_keranjang']= $this->show_model->GetDataKeranjang();
		//$data['list_selesai']= $this->show_model->GetDataOrder($statusselesai);
		$data['list_order']= $this->show_model->GetStatusOrder($status,$limit,$offset);
		$data['list_cancel']= $this->show_model->GetDataOrder($statuscancel);
		$data['main_view']='status_order';
		$this->load->view('template', $data);
	}else{
		$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
        	redirect('page');
        }
	}
	public function OrderSelesai($offset = NULL){
		if ($this->session->userdata('logged_in') == true) {

		$status ="Pesanan ditujukan ke Merchant";
		$statuscancel ="Order Dibatalkan";
		$statusselesai ="Selesai";
		$this->load->library('Pagination');
		$limit = 5	;
		if(!is_null($offset))
		{
			$offset = $this->uri->segment(3);
		}
		$this->load->library('Pagination');
		$config['uri_segment'] = 3;
		$config['base_url'] = base_url().'index.php/Page/OrderSelesai';
		$config['total_rows'] = $this->show_model->Total_Records_Finish($statusselesai);
		$config['per_page'] = $limit;
		$config['num_links'] = 3;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$data['list_selesai']= $this->show_model->GetFinishOrder($statusselesai,$limit,$offset);
		$this->pagination->initialize($config);
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		// $data['list_keranjang']= $this->show_model->GetDataKeranjang();
		//$data['list_selesai']= $this->show_model->GetDataOrder($statusselesai);
		$data['list_order']= $this->show_model->GetDataOrder($status);
		$data['list_cancel']= $this->show_model->GetDataOrder($statuscancel);
		$data['main_view']='Order_Selesai';
		$this->load->view('template', $data);
		}else{
			$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
        	redirect('page');
        }
	}


	public function OrderCancel($offset = NULL){
		if ($this->session->userdata('logged_in') == true) {

		$status ="Pesanan ditujukan ke Merchant";
		$statuscancel ="Order Dibatalkan";
		$statusselesai ="Order Dibatalkan";
		$this->load->library('Pagination');
		$limit = 5	;
		if(!is_null($offset))
		{
			$offset = $this->uri->segment(3);
		}
		$this->load->library('Pagination');
		$config['uri_segment'] = 3;
		$config['base_url'] = base_url().'index.php/Page/OrderCancel';
		$config['total_rows'] = $this->show_model->Total_Records_Finish($statusselesai);
		$config['per_page'] = $limit;
		$config['num_links'] = 3;
		$config['full_tag_open'] = "<ul class='pagination'>";
		$config['full_tag_close'] = "</ul>";
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = "<li class='active'><a href='#'>";
		$config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
		$config['next_tag_open'] = "<li>";
		$config['next_tagl_close'] = "</li>";
		$config['prev_tag_open'] = "<li>";
		$config['prev_tagl_close'] = "</li>";
		$config['first_tag_open'] = "<li>";
		$config['first_tagl_close'] = "</li>";
		$config['last_tag_open'] = "<li>";
		$config['last_tagl_close'] = "</li>";
		$data['list_selesai']= $this->show_model->GetFinishOrder($statusselesai,$limit,$offset);
		$this->pagination->initialize($config);
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		// $data['list_keranjang']= $this->show_model->GetDataKeranjang();
		//$data['list_selesai']= $this->show_model->GetDataOrder($statusselesai);
		$data['list_order']= $this->show_model->GetDataOrder($status);
		$data['list_cancel']= $this->show_model->GetDataOrder($statuscancel);
		$data['main_view']='Order_Cancel';
		$this->load->view('template', $data);
	}else{
			$this->session->set_flashdata('notif_log_password', 'Maaf, anda harus login terlebih dahulu.');
        	redirect('page');
        }
	}


	public function merchant_profile(){
		$merchant_username=$this->uri->segment(3);
		$merchant_id = $this->in_model->GetData(['username'=> $merchant_username],'user_merchant')->row('id');
		$wishlisted= $this->show_model->GetDataWishlist();
		$product_validation = array();
		foreach ($wishlisted as $wish) {
			$product_validation[] = $wish->product_id;
		}
		$favorited= $this->show_model->GetDataMerchantFavorite();
		$user_validation = array();
		foreach ($favorited as $favor) {
			$user_validation[] = $favor->merchant_id;
		}

		$data['notification']=$this->show_model->GetDataTlmerchant($merchant_id);
		$data['user_validation']= $user_validation;
		$data['product_validation'] = $product_validation;
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		$data['list_merchant']= $this->show_model->GetDataMerchantProfile($merchant_username);
		$data['main_view']='merchant_profile';
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['list_product'] = $this->show_model->GetProdukMerchant(array("product.id"=>$merchant_id)); 
		$this->load->view('template', $data);
	}
	public function merchant(){
		$favorited= $this->show_model->GetDataMerchantFavorite();
		$user_validation = array();
		foreach ($favorited as $favor) {
			$user_validation[] = $favor->merchant_id;
		}

		$data['user_validation']= $user_validation;
		$data['amountorder'] = $this->show_model->AmountOrder();
		$data['amountCart']=count($this->show_model->GetDataCart());
		$data['list_cart']= $this->show_model->GetDataCart();
		$data['list_merchant']= $this->show_model->GetDataMerchant();

		$data['main_view']='merchant_list';
		$this->load->view('template', $data);
	}

	

	
}

/* End of file page.php */
/* Location: ./application/controllers/page.php */