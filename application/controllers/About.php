<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('Product_M', 'product');
	}

	public function index()
	{
		$this->load->view('user/about/index');
	}
}
