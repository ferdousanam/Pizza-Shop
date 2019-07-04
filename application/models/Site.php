<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Site extends CI_Model{
	function getAllCategories(){
		$this->db
			->order_by('lib', 'asc')
			->from('categorie');
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
			->where('id', $id)
			->from('produit');
		$query = $this->db->get();
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
}
