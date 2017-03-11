<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Databaseoperations extends CI_Model {
    
    //main cat start
    public function allMainCategory() {
        return $this->db->get_where('r_category',array('subCategory'=>0))->result_array();
    }
    public function allActiveMainCategory() {
         return $this->db->get_where('r_category',array('subCategory'=>0,'status'=>'active'))->result_array();
    }
    public function mainCatDetailBySlug($slug) {
        return $this->db->get_where('r_category',array('slug'=>$slug,'status'=>'active'))->row_array();
    }
    //end of main cat
    public function allSubCategory() {
        return $this->db->get_where('r_category',array('subCategory !='=>0))->result_array();
    }
    
    public function subCatById($mainCatId) {
        return $this->db->get_where('r_category',array('subCategory'=>$mainCatId))->result_array();
    }
    
    public function addDetail($userInput,$tableName) {
        return $this->db->insert($tableName,$userInput);
    }
    
    public function subCatDetail($id) {
        return $this->db->get_where('r_category',array('subCategory'=>$id))->result_array();
    }
    public function allproducts() {
        return $this->db->get('r_product')->result_array();
    }
	public function allcertificate() {
        return $this->db->get('r_certificate')->result_array();
    }
    public function categoryName($id){
        return $this->db->get_where('r_category',array('id'=>$id))->row_array();
    }
    
    /**
     * 
     * start of products
     */
    public function productsBySubCat($id) {
        return $this->db->get_where('r_product',array('catId'=>$id))->result_array();
    }
    public function productsByMainCat($id) {
        return $this->db->get_where('r_product',array('mainCatID'=>$id))->result_array();
    }
    
    
    public function getResultAll($tableName) {
        return $this->db->get($tableName)->result_array();
    }
    public function getBySlugRow($slug,$tableName) {
        return $this->db->get_where($tableName,array('slug'=>$slug))->row_array();
    }
    
    public function uniqueSlug($slug,$tableName) {
        $this->db->where('slug',$slug);
        $r=$this->db->get($tableName);
        $count=$r->num_rows();
        if($count>0){
            return true;
        }else{
            return false;
        }
    }
    
}