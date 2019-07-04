<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent:: __construct();
		$this->load->model('Product_M', 'product');
	}

	public function index()
	{
		$data['allproducts'] = $this->product->getAllProduct();
		$data['allpizzas'] = $this->product->getAllPizza();
		$data['allsandwiches'] = $this->product->getAllSandwich();
		$this->load->view('user/homepage/index', $data);
	}

	public function aa(){
		$result = $this->product->getIngredientsByProduct(2);
		echo "<pre>";
		print_r($result);
	}
}
