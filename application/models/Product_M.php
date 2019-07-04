<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Product_M extends CI_Model{
	function getAllProduct(){
		$this->db
			->order_by('id', 'desc')
			->from('produit');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function getIngredientsByProduct($product_id){
		$this->db
			->order_by('ingredients.id', 'desc')
			->from('produit')
			->join('produitingredient', 'produit.id = produitingredient.idp', 'left')
			->join('ingredients', 'produitingredient.idi = ingredients.id', 'left')
			->where('produit.id', $product_id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function getAllPizza(){
		$this->db
			->order_by('id', 'desc')
			->where('cat', 1);
		$query = $this->db->get('produit');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function getAllSandwich(){
		$this->db
			->order_by('id', 'desc')
			->where('cat', 2);
		$query = $this->db->get('produit');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	function getProductById($id){
		$this->db
			->select('produit.*, categorie.lib as cat_lib')
			->from('produit')
			->join('categorie', 'produit.cat = categorie.id')
			->where('produit.id', $id);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	function getPopularProduct(){
		$this->db
			->order_by('id', 'desc')
			->from('produit')
			->limit(3);
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
}
