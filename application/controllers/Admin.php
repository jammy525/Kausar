<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    private $isUserExist;
    private $username;
    private $password;

    public function __construct() {
        parent::__construct();
        $this->username = $this->session->userdata('username');
        $this->password = $this->session->userdata('password');
        $sessionData = array(
            'username' => $this->username,
            'password' => $this->password
        );
        $this->load->library('authentication');
        $isUserFound = $this->authentication->checkUser($sessionData);
        if (!$isUserFound) {
            redirect('admin/login');
        }
        //$this->output->set_content_type('application/json');
        $this->load->library('form_validation');
        $this->load->helper('security');
        $this->load->model('databaseoperations');
    }

    public function index() {
        $this->dashboard();
    }

    public function parts($page = 'dashboard', $data = null) {
        $data['head'] = $this->load->view('parts/admin/head', $data, true);
        $data['nav'] = $this->load->view('parts/admin/nav', $data, true);
        $data['footer'] = $this->load->view('parts/admin/footer', $data, true);
        $data['footerScript'] = $this->load->view('parts/admin/footerScript', null, true);
        $this->load->view('admin/' . $page, $data);
    }

    public function dashboard($page = 'dashboard') {
        $this->parts($page);
    }

    public function category($req) {

        /**
         * main Category DEtail
         */
        if ($req == 'view') {
            $data['title'] = 'Product Category';
            $page = 'view-category';
            $data['allMainCategory'] = $this->databaseoperations->allMainCategory();
            $data['allSubCategory'] = $this->databaseoperations->allSubCategory();
        }
        /**
         * main category add
         */
        if ($req == 'add') {
            $userInput['name'] = $this->input->post('name');
            $this->form_validation->set_rules('name', 'Category Name', 'trim|required|xss_clean');
            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }
            $userInput['slug'] = $this->slug($userInput['name'], 'r_category');

            $isMainCategoryCreated = $this->databaseoperations->addDetail($userInput, 'r_category');
            if ($isMainCategoryCreated) {
                $json = array('status' => true, 'message' => 'Main Category Added Successfully', 'redirect' => base_url() . 'admin/category/view', 'dialogMsg' => 'Please Wait Main Category is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'fail to create group please try later');
            }


            echo json_encode($json);
            exit;
        }
        /**
         * sub Cat Detail
         */
        if ($req == 'subCatDetail') {
            $id = $this->input->post('id');
            if (empty($id)) {
                $json = array('status' => false, 'message' => 'Invalid Request');
                echo json_encode($json);
                exit;
            }
            $isSubCatFound = $this->databaseoperations->subCatDetail($id);
            echo json_encode(array('status' => true, 'message' => $isSubCatFound));
            exit;
        }
        /**
         * sub cat Add
         */
        if ($req == 'subCatAdd') {
            $userInput['subCategory'] = $this->input->post('id');
            if (empty($userInput['subCategory'])) {
                $json = array('status' => false, 'message' => 'Invalid Request');
                echo json_encode($json);
                exit;
            }

            $userInput['name'] = $this->input->post('name');
            $this->form_validation->set_rules('name', 'Sub Category Name', 'trim|required|xss_clean');
            $userInput['slug'] = $this->slug($userInput['name'], 'r_category');
            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            $isSubCatAdded = $this->databaseoperations->addDetail($userInput, 'r_category');
            if ($isSubCatAdded) {
                $json = array('status' => true, 'message' => $userInput);
            } else {
                $json = array('status' => false, 'message' => 'Fail');
            }
            echo json_encode($json);
            exit;
        }
        if ($req == 'status') {
            $action = $this->input->post('action');
            $id = $this->input->post('cId');
            if (empty($id)) {
                echo json_encode(array('status' => false, 'message' => 'Invalid Requedt'));
                exit();
            }

            $this->db->or_where('subCategory', $id);
            $this->db->or_where('id', $id);
            $isStatusUpdated = $this->db->update('r_category', array('status' => strtolower($action)));
            if ($isStatusUpdated) {
                $json = array('status' => true, 'message' => 'success');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        if ($req == 'deleteCat') {
            $id = $this->input->post('id');
            if (empty($id)) {
                echo json_encode(array('status' => false, 'message' => 'Invalid Requedt'));
                exit();
            }
            $this->db->where('id', $id);
            $isCategoryDeleted = $this->db->delete('r_category');
            if ($isCategoryDeleted) {
                $json = array('status' => true, 'message' => 'success');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        if($req=='homeAdd'){
            $id=$this->input->post('id');
            $value=$this->input->post('value');
            if(empty($id) || empty($value)){
                $json=array('status'=>false,'message'=>'Invalid');
                echo json_encode($json);
                exit;
            }
            $this->db->where('id',$id);
            $isUpdate=$this->db->update('r_category',array('addtohome'=>$value));
            if($isUpdate){
                $json=array('status'=>true,'message'=>'success');
            }else{
                $json=array('status'=>false,'message'=>'fail');
            }
            echo json_encode($json);
            exit();
        }


        $this->parts($page, $data);
    }

    public function product($resp) {
        if ($resp == 'add') {
            $page = 'add-product';
            $data['title'] = 'Add Product';
            $data['mainCat'] = $this->databaseoperations->allMainCategory();
        }
        if ($resp == 'addProduct') {
            $userInput['name'] = $this->input->post('name');
            $this->form_validation->set_rules('name', 'Product Name', 'trim|required|xss_clean');
            $userInput['price'] = $this->input->post('price');
            $this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean');
            $userInput['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
			$userInput['specification'] = $this->input->post('specification');
            $this->form_validation->set_rules('specification', 'Specification', 'trim|required|xss_clean');
            /* $userInput['catId'] = $this->input->post('catId');
              $this->form_validation->set_rules('catId', 'Sub category', 'trim|required|xss_clean'); */
            $userInput['mainCatID'] = $this->input->post('mainCatID');
            $this->form_validation->set_rules('mainCatID', 'Main Category', 'trim|required|xss_clean');

            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            $userInput['slug'] = $this->slug($userInput['name'], 'r_product');



            //file upload
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {

                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $newFileName = $userInput['slug'] . "." . $ext;

                $this->load->helper('customupload_helper_helper');
                $upload = fileUpload($_FILES['image'], 'image', 'jpg|jpeg|JPEG|JPG|PNG|png', FCPATH . "control/upload/product", $newFileName);
                if ($upload['status'] == false) {
                    $json = array('status' => false, 'message' => 'fail to upload catalog error' . $upload['data']);
                    echo json_encode($json);
                    exit;
                } else {
                    $userInput['image'] = $upload['data'];
                }
            }

            $isProductAdded = $this->databaseoperations->addDetail($userInput, 'r_product');
            if ($isProductAdded) {
                $json = array('status' => true, 'message' => 'Product Added Successfully', 'redirect' => base_url() . 'admin/product/view', 'dialogMsg' => 'Please Wait Product is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        /**
         * view producsts
         */
        if ($resp == 'view') {
            $page = 'view-product';
            $data['title'] = 'View All Product';
            $data['allProduct'] = $this->databaseoperations->allproducts();
        }

        /**
         * delete product
         */
        if ($resp == 'delete') {
            $id = $this->input->post('cId');
            if (empty($id)) {
                echo json_encode(array('status' => false, 'message' => 'Invalid Requedt'));
                exit();
            }
            $this->db->where('id', $id);
            $isCategoryDeleted = $this->db->delete('r_product');
            if ($isCategoryDeleted) {
                $json = array('status' => true, 'message' => 'success');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        if ($resp == 'edit' && $this->uri->segment(3) != NULL) {
            $id = $this->uri->segment(4);
            $data['productDetail'] = $this->db->get_where('r_product', array('id' => $id))->row_array();
            if ($data['productDetail'] == NULL) {
                show_404();
            }
            $page = 'edit-product';
            $data['title'] = $data['productDetail']['name'];
            $data['mainCat'] = $this->databaseoperations->allMainCategory();
        }
        if ($resp == 'editProduct') {
            $id=$this->input->post('id');
            if(isset($id)){
                $id=$this->input->post('id');
            }else{
                echo "invalid request ";
                exit;
            }
            $userInput['name'] = $this->input->post('name');
            $this->form_validation->set_rules('name', 'Sub Category Name', 'trim|required|xss_clean');
            
            $userInput['price'] = $this->input->post('price');
            $this->form_validation->set_rules('price', 'Price', 'trim|required|xss_clean');
            $userInput['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
            /* $userInput['catId'] = $this->input->post('catId');
              $this->form_validation->set_rules('catId', 'Sub category', 'trim|required|xss_clean'); */
            $userInput['mainCatID'] = $this->input->post('mainCatID');
            $this->form_validation->set_rules('mainCatID', 'Main Category', 'trim|required|xss_clean');
            /*$userInput['addtohome'] = $this->input->post('addtohome');
            $this->form_validation->set_rules('addtohome', 'addtohome', 'trim|xss_clean');
            */// check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            $userInput['slug'] = $this->slug($userInput['name'], 'r_product');



            //file upload
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {

                $ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $newFileName = $userInput['slug'] . "." . $ext;

                $this->load->helper('customupload_helper_helper');
                $upload = fileUpload($_FILES['image'], 'image', 'jpg|jpeg|JPEG|JPG|PNG|png', FCPATH . "control/upload/product", $newFileName);
                if ($upload['status'] == false) {
                    $json = array('status' => false, 'message' => 'fail to upload catalog error' . $upload['data']);
                    echo json_encode($json);
                    exit;
                } else {
                    $userInput['image'] = $upload['data'];
                }
            }
            
            $this->db->where('id',$id);
            $isProductAdded = $this->db->update('r_product',$userInput);
            if ($isProductAdded) {
                $json = array('status' => true, 'message' => 'Product Added Successfully', 'redirect' => base_url() . 'admin/product/view', 'dialogMsg' => 'Please Wait Product is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }


        $this->parts($page, $data);
    }
	
	public function certificate($resp) {
        if ($resp == 'add') {
            $page = 'add-certificate';
            $data['title'] = 'Add Certificate';
            //$data['mainCat'] = $this->databaseoperations->allMainCategory();
        }
        if ($resp == 'addCertificate') { 
            $userInput['certificateName'] = $this->input->post('certificateName');
            $this->form_validation->set_rules('certificateName', 'Certificate Name', 'trim|required|xss_clean');
            $userInput['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
            $userInput['status'] = $this->input->post('status');

            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            //$userInput['slug'] = $this->slug($userInput['name'], 'r_certificate');



            //file upload
            if (isset($_FILES['certificateImage']) && !empty($_FILES['certificateImage']['name'])) {

                $ext = pathinfo($_FILES['certificateImage']['name'], PATHINFO_EXTENSION);
                $newFileName = 'cert_' . time()."." . $ext;

                $this->load->helper('customupload_helper_helper');
                $upload = fileUpload($_FILES['certificateImage'], 'certificateImage', 'jpg|jpeg|JPEG|JPG|PNG|png', FCPATH . "control/upload/certificate", $newFileName);
                if ($upload['status'] == false) {
                    $json = array('status' => false, 'message' => 'fail to upload catalog error' . $upload['data']);
                    echo json_encode($json);
                    exit;
                } else {
                    $userInput['certificateImage'] = $upload['data'];
                }
            }

            $isCertificateAdded = $this->databaseoperations->addDetail($userInput, 'r_certificate');
            if ($isCertificateAdded) {
                $json = array('status' => true, 'message' => 'Certificate Added Successfully', 'redirect' => base_url() . 'admin/certificate/view', 'dialogMsg' => 'Please Wait Certificate is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        /**
         * view producsts
         */
        if ($resp == 'view') {
            $page = 'view-certificate';
            $data['title'] = 'View All Certificate';
            $data['allCertificate'] = $this->databaseoperations->allcertificate();
        }

        /**
         * delete product
         */
        if ($resp == 'delete') {
            $id = $this->input->post('cId');
            if (empty($id)) {
                echo json_encode(array('status' => false, 'message' => 'Invalid Requedt'));
                exit();
            }
            $this->db->where('id', $id);
            $isCategoryDeleted = $this->db->delete('r_certificate');
            if ($isCategoryDeleted) {
                $json = array('status' => true, 'message' => 'success');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }
        if ($resp == 'edit' && $this->uri->segment(3) != NULL) {
            $id = $this->uri->segment(4);
            $data['certificateDetail'] = $this->db->get_where('r_certificate', array('id' => $id))->row_array();
			//echo '<pre>';print_r($data['certificateDetail']);die;
            if ($data['certificateDetail'] == NULL) {
                show_404();
            }
            $page = 'edit-certificate';
            $data['title'] = $data['certificateDetail']['certificateName'];
            //$data['mainCat'] = $this->databaseoperations->allMainCategory();
        }
        if ($resp == 'editCertificate') {
            $id=$this->input->post('id');
			
            if(isset($id)){
                $id=$this->input->post('id');
            }else{
                echo "invalid request ";
                exit;
            }
            $userInput['certificateName'] = $this->input->post('certificateName');
            $this->form_validation->set_rules('certificateName', 'Certificate Name', 'trim|required|xss_clean');
            $userInput['status'] = ( $this->input->post('status') ) ? $this->input->post('status') : 0;
            $userInput['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'Description', 'trim|required|xss_clean');
            
			
			
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            //$userInput['slug'] = $this->slug($userInput['name'], 'r_product');



            //file upload
            if (isset($_FILES['certificateImage']) && !empty($_FILES['certificateImage']['name'])) {

                $ext = pathinfo($_FILES['certificateImage']['name'], PATHINFO_EXTENSION);
                $newFileName = 'cert_' . time(). "." . $ext;

                $this->load->helper('customupload_helper_helper');
                $upload = fileUpload($_FILES['certificateImage'], 'certificateImage', 'jpg|jpeg|JPEG|JPG|PNG|png', FCPATH . "control/upload/certificate", $newFileName);
                if ($upload['status'] == false) {
                    $json = array('status' => false, 'message' => 'fail to upload catalog error' . $upload['data']);
                    echo json_encode($json);
                    exit;
                } else {
                    $userInput['certificateImage'] = $upload['data'];
                }
            }
            $this->db->where('id',$id);
            $isProductAdded = $this->db->update('r_certificate',$userInput);
            if ($isProductAdded) {
                $json = array('status' => true, 'message' => 'Product Added Successfully', 'redirect' => base_url() . 'admin/certificate/view', 'dialogMsg' => 'Please Wait Product is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }


        $this->parts($page, $data);
    }

    public function subCat() {
        $id = $this->input->post('id');
        if (empty($id)) {
            $json = array('status' => false, 'message' => array());
            echo json_encode($json);
            exit;
        }
        $subCatFound = $this->databaseoperations->subCatById($id);
        echo json_encode(array('status' => true, 'message' => $subCatFound));
        exit;
    }

    public function about($req) {
        if ($req == 'add') {
            $page = 'add-about';
            $data['about']=$this->db->get_where('r_about',array('id'=>1))->row_array();
            $data['title'] = 'Add About';
        }
        if ($req == 'addAbout') {
            $userInput['menuName'] = $this->input->post('menuName');
            $this->form_validation->set_rules('menuName', 'menuName', 'trim|required|xss_clean');
            $userInput['title'] = $this->input->post('title');
            $this->form_validation->set_rules('title', 'title', 'trim|required|xss_clean');
            $userInput['description'] = $this->input->post('description');
            $this->form_validation->set_rules('description', 'description', 'trim|required|xss_clean');

            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }
            

            $isPageAddes = $this->db->update('r_about',$userInput);
            if ($isPageAddes) {
                $json = array('status' => true, 'message' => 'Page Added Successfully', 'redirect' => base_url() . 'admin/about/view', 'dialogMsg' => 'Please Wait Page is creating ...');
            } else {
                $json = array('status' => false, 'message' => 'Fail');
            }
            echo json_encode($json);
            exit;
        }
        if ($req == 'view') {
            $page = 'view-about';
            $data['title'] = 'All Abouts';
            $data['allAbout'] = $this->databaseoperations->getResultAll('r_about');
        }
        if ($req == 'delete') {
            $id = $this->input->post('cId');
            if (empty($id)) {
                echo json_encode(array('status' => false, 'message' => 'Invalid Requedt'));
                exit();
            }
            $this->db->where('id', $id);
            $isCategoryDeleted = $this->db->delete('r_about');
            if ($isCategoryDeleted) {
                $json = array('status' => true, 'message' => 'success');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
            exit;
        }

        $this->parts($page, $data);
    }

    public function gallery($req = 'view') {

        if ($req == 'view') {
            $data['title'] = 'OLS Gallery';
            $data['galleryImages'] = $this->db->get('r_gallery')->result_array();
            $this->parts('view-gallery', $data);
        }
        if ($req == 'add') {
            //file upload
            if (isset($_FILES['image']) && !empty($_FILES['image']['name'])) {

                //$ext = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
                $newFileName = $_FILES['image']['name'];

                $this->load->helper('customupload_helper_helper');
                $upload = fileUpload($_FILES['image'], 'image', 'jpg|jpeg|JPEG|JPG|PNG|png', FCPATH . "assets/uploads/", $newFileName);
                if ($upload['status'] == false) {
                    $json = array('status' => false, 'message' => 'fail to upload catalog error' . $upload['data']);
                    echo json_encode($json);
                    exit;
                } else {
                    $userInput['image'] = $upload['data'];
                }
            }

            $isGalleryAdded = $this->db->insert('r_gallery', $userInput);
            if ($isGalleryAdded) {
                $json = array('status' => true, 'message' => 'Gallery Image Added Successfully');
            } else {
                $json = array('status' => false, 'message' => 'fail');
            }
            echo json_encode($json);
        }
        if ($req == 'delete' && $this->uri->segment(4) != null) {
            $id = $this->uri->segment(4);
            $this->db->delete('r_gallery', array('id' => $id));
            redirect(base_url() . 'admin/gallery/view');
        }
    }

    public function slug($slug, $tableName) {
        # Prep string with some basic normalization
        $slug = strtolower($slug);
        $slug = strip_tags($slug);
        $slug = stripslashes($slug);
        $slug = html_entity_decode($slug);

        # Remove quotes (can't, etc.)
        $slug = str_replace('\'', '', $slug);

        # Replace non-alpha numeric with hyphens
        $match = '/[^a-z0-9]+/';
        $replace = '-';
        $slug = preg_replace($match, $replace, $slug);

        $slug = trim($slug, '-');
        $firstSlug = $slug;


        $i = 0;
        while (true) {
            if ($this->databaseoperations->uniqueSlug($slug, $tableName) == false) {
                return $slug;
                break;
            } else {
                $slug = $firstSlug . "-" . $i;
                //$slug = $this->slugFreeUrl($slug);
            }
            $i++;
        }
    }

}
