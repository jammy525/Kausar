<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Frontend extends CI_Model {
    
    public function mainCategoryBySlug($slug) {
        return $this->db->get_where('r_category',array('slug'=>$slug,'status'=>'active','subCategory'=>'0'))->row_array();
    }
	public function allcertificate() {
		//$this->db->where();
        return $this->db->get_where('r_certificate',array('status'=>'1') )->result_array();
    }
    
    public function allActiveCategory() {
        return $this->db->get_where('r_category',array('status'=>'active'))->result_array();
    }
    
    public function productByMainCatId($id) {
        return $this->db->get_where('r_product',array('mainCatID'=>$id))->result_array();
    }
    public function productBySubCatId($id) {
        return $this->db->get_where('r_product',array('catId'=>$id))->result_array();
    }
    
    public function productDetail($slug) {
       return $this->db->get_where('r_product',array('slug'=>$slug))->row_array(); 
    }
    /*public function productDetailByMainCatJoin($slug) {
        $this->db->select('r_product.name,r_product.price,r_product.description,r_product.product1,r_product.product2,r_product.image,r_product.catId,r_product.mainCatID,r_product.slug as productSlug,r_category.id,r_category.slug as catSlug,r_category.subCategory,r_category.name as catName');
        $this->db->where('r_product.mainCatID',$slug);
        $this->db->join('r_category','r_product.mainCatID=r_category.id','LEFT');
        return $this->db->get('r_product')->result_array();
    }*/
    
 public function getById($id,$tableName) {
     return $this->db->get_where($tableName,array('id'=>$id))->row_array();
 }
    
    public function mainSubCatBySlug($slug) {
        return $this->db->get_where('r_category',array('slug'=>$slug,'status'=>'active','subCategory!='=>'0'))->row_array();
    }
    
}