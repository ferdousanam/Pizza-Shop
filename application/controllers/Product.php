<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
	function __construct(){
		parent:: __construct();
		$this->load->model('Product_M', 'product');
	}

	public function index($id)
	{
		$data['product'] = $this->product->getProductById($id);
		$this->load->view('user/product/index', $data);
	}

	public function product($id)
	{
		$data['product'] = $this->product->getProductById($id);
		$data['popularProducts'] = $this->product->getPopularProduct();
		$this->load->view('user/product/index', $data);
	}
}
