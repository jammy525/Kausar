<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('databaseoperations');
        $this->load->model('frontend');
    }
	
	
	public function index() {
		$maincategory = $this->databaseoperations->allActiveMainCategory();
		$dara['mainCategories'] = $maincategory;
		$data['title'] = "Ocean life science corporation";
		$data['style_script'] = $this->load->view('common/style_script','',true);
		$data['otherJs'] = $this->load->view('common/otherJs','',true);
		$data['footer'] = $this->load->view('common/footer',$dara,true);
		$data['header'] = $this->load->view('common/header','',true);
		$data['copyright'] = $this->load->view('common/copyright','',true);
		$this->load->view('home',$data);
		
    }
	public function youremail(){
		
	}

    public function index1() {
		$data['title'] = "Ocean life science corpotation";
		$this->parts('home',$data);
    }
	
	public function about() {
        $data['about']=$this->db->get_where('r_about')->row_array();
        $this->parts('about',$data);
    }
	private function validateForm(){
		$userInput['name'] = $this->input->post('name');
		$this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
		$userInput['email'] = $this->input->post('email');
		$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
		$userInput['phone'] = $this->input->post('phone');
		$this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean');
		$userInput['message'] = $this->input->post('message');
		$this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
		

		// check form validation of user input
		if ($this->form_validation->run() == FALSE) {
			return false;
		}else{
			return true;
		}
	}
	public function enquiry() {
		$this->load->library('form_validation');
        $this->load->helper('security');
        $this->parts('enquiry');
    }
	public function enquiryprocess(){
		$this->load->library('form_validation');
		$this->load->helper('security');
		if($this->validateForm()){
			foreach ($userInput as $key => $value) {
				$body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
			}
			$body.="</table>";
			$this->load->helper('swiftmailer');
			$mailSent = swiftMailer('jameel.risia@gmail.com', 'Enquiry', $body);
			$m = json_decode($mailSent);
			if ($m->status) {
				$this->session->set_flashdata('enquirySucc', 'Thanku for contacting with sag health science');
			} else {
				$this->session->set_flashdata('enquiryFailed', 'Server down please try later');
			}
			redirect(base_url('enquiry'));
		}else{
			$this->parts('enquiry');
		}		
	}
	
	public function contactprocess(){
		$this->load->library('form_validation');
		$this->load->helper('security');
		if($this->validateForm()){
			foreach ($userInput as $key => $value) {
				$body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
			}
			$body.="</table>";
			$this->load->helper('swiftmailer');
			$mailSent = swiftMailer('jameel.risia@gmail.com', 'Contact', $body);
			$m = json_decode($mailSent);
			if ($m->status) {
				$this->session->set_flashdata('enquirySucc', 'Thanku for contacting with sag health science');
			} else {
				$this->session->set_flashdata('enquiryFailed', 'Server down please try later');
			}
			redirect(base_url('contact'));
		}else{
			$this->parts('contact');
		}		
	}
	public function certification() {
		$data['allcertificates'] = $this->frontend->allcertificate(); 
        $this->parts('certification',$data);
    }
    public function products($mainCat = null, $subCat = null, $product = null) {
		//echo $mainCat, ', ', $subCat, ', ',$product ;
        if ($mainCat == null) {
            show_404();
        }
        $data['allCategories'] = $this->frontend->allActiveCategory();
        $data['currentMainCats'] = $this->frontend->mainCategoryBySlug($mainCat);
        if ($data['currentMainCats'] == NULL) {
            show_404();
        }
        $data['allProducts'] = $this->db->get('r_product')->result_array();
        if ($subCat == null && $product == null) {
            $data['product'] = $this->frontend->productByMainCatId($data['currentMainCats']['id']);
            $this->parts('products', $data);
        }
        if ($subCat != null && $product == null) {
            $data['curentSubCat'] = $this->frontend->mainSubCatBySlug($subCat);
            if ($data['curentSubCat'] == NULL) {
                show_404();
            }
            $data['product'] = $this->frontend->productBySubCatId($data['curentSubCat']['id']);
            $this->parts('products', $data);
        }







        /*

          $data['mainCategoryDetail'] = $this->databaseoperations->mainCatDetailBySlug($slug);

          if ($data['mainCategoryDetail']['subCategory'] == 0) {
          $data['subCategryByMainCatId'] = $this->databaseoperations->subCatById($data['mainCategoryDetail']['id']);

          if (count($data['subCategryByMainCatId']) > 0) {
          $data['products'] = $this->databaseoperations->productsByMainCat($data['subCategryByMainCatId'][0]['subCategory']);
          } else {
          $data['products'] = NULL;
          }
          } else {
          $data['subCategryByMainCatId'] = $this->databaseoperations->subCatById($data['mainCategoryDetail']['subCategory']);
          $data['products'] = $this->databaseoperations->productsBySubCat($data['mainCategoryDetail']['id']);
          }

         */
    }

    public function productdetail($slug) {
        $data['allCategory'] = $this->frontend->allActiveCategory();
        $page = 'product-detail';
        $data['allProducts'] = $this->db->get('r_product')->result_array();
        $data['productDetail'] = $this->databaseoperations->getBySlugRow($slug, 'r_product');
        if ($data['productDetail'] == NULL) {
            show_404();
        }
        $data['currentMainCat'] = $this->frontend->getById($data['productDetail']['mainCatID'], 'r_category');
        $data['curentSubCat'] = $this->frontend->getById($data['productDetail']['catId'], 'r_category');
        $this->parts($page, $data);
    }

    

    public function order($slug) {
        $data['productDetail'] = $this->databaseoperations->getBySlugRow($slug, 'r_product');
        $page = 'order';
        $this->parts($page, $data);
    }
    public function orderbook() {
        $userInput = $this->input->post();
        
        $userInput['productName'] = $this->input->post('productName');
        $productSlug = $this->input->post('productSlug');
        $body = "<table>";
        foreach ($userInput as $key => $value) {
            $body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        $body.="</table>";
         
        $this->load->helper('swiftmailer');
        $mailSent = swiftMailer('info@saghealthscience.com', 'Contact deatiail of Product Booked', $body);
        $m = json_decode($mailSent);
        if ($m->status) {
            $this->session->set_flashdata('msg', 'Thank you for booking the order for ' . $userInput['productName']);
        } else {
            $this->session->set_flashdata('msg', 'Server down please try later');
        }
        redirect(base_url() . 'order/' . $productSlug);
        

    }

   /* public function orderbook() {
        $this->load->library('form_validation');
        $this->load->helper('security');
        $userInput['name'] = $this->input->post('name');
        $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
        $userInput['email'] = $this->input->post('email');
        $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
        $userInput['phone'] = $this->input->post('phone');
        $this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean');
        $userInput['quantity'] = $this->input->post('quantity');
        $this->form_validation->set_rules('quantity', 'quantity', 'trim|required|xss_clean');
        $userInput['message'] = $this->input->post('message');
        $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
        $userInput['location'] = $this->input->post('location');
        $this->form_validation->set_rules('name', 'Sub Category Name', 'trim|required|xss_clean');

        // check form validation of user input
        if ($this->form_validation->run() == FALSE) {
            echo json_encode(array('status' => false, 'message' => validation_errors()));
            exit;
        }
        $userInput1 = $this->input->post();
        
        $userInput['productName'] = $this->input->post('productName');
        $productSlug = $this->input->post('productSlug');
        $body = "<table>";
        foreach ($userInput1 as $key => $value) {
            $body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        $body.="</table>";


        /* More headers
        $headers = "MIME-Version: 1.0\\r\
            ";
        $headers .= "Content-type: text/html; charset=iso-8859-1\\r\
            ";
        $headers .= "From: <info@saghealthscience.com>\\r";
        $headers .= "X-Mailer: PHP \\r\
            ";
        

        $m=mail('info@saghealthscience.com', 'Product Booked', "hello", $headers);
         
        $this->load->helper('swiftmailer');
        $mailSent = swiftMailer('info@saghealthscience.com', 'Product Booked', $body);
        $m = json_decode($mailSent);
        echo "<pre>";
        var_dump($body);
        var_dump($m);
        exit();
        if ($m->status) {
            $this->session->set_flashdata('msg', 'Thank you for booking the order for ' . $userInput['productName']);
        } else {
            $this->session->set_flashdata('msg', 'Server down please try later');
        }
        redirect(base_url() . 'order/' . $productSlug);
    }*/

    public function contact($page = 'contact') {
		$this->load->library('form_validation');
        $this->load->helper('security');
        $this->parts($page);
    }

    public function contactSubmit() {
        $userInput = $this->input->post();
        $body = "<table>";
        foreach ($userInput as $key => $value) {
            $body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
        }
        $body.="</table>";



        $this->load->helper('swiftmailer');
        $mailSent = swiftMailer('info@saghealthscience.com', 'Contact Us/Newsletter', $body);
        $m = json_decode($mailSent);
        if ($m->status) {
            $this->session->set_flashdata('msg', 'Thanku for contacting with sag health science');
        } else {
            $this->session->set_flashdata('msg', 'Server down please try later');
        }
        redirect(base_url() . 'contact');
    }

    public function partnership($req = null) {
        if ($req == null) {
            $this->parts('partnership');
        }
        if ($req == 'req') {
            $this->load->library('form_validation');
            $this->load->helper('security');
            $userInput['name'] = $this->input->post('name');
            $this->form_validation->set_rules('name', 'Name', 'trim|required|xss_clean');
            $userInput['email'] = $this->input->post('email');
            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
            $userInput['phone'] = $this->input->post('phone');
            $this->form_validation->set_rules('phone', 'phone', 'trim|required|xss_clean');
            $userInput['message'] = $this->input->post('message');
            $this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
            $userInput['location'] = $this->input->post('location');
            $this->form_validation->set_rules('name', 'Sub Category Name', 'trim|required|xss_clean');

            // check form validation of user input
            if ($this->form_validation->run() == FALSE) {
                echo json_encode(array('status' => false, 'message' => validation_errors()));
                exit;
            }

            $body = "<table>";
            foreach ($userInput as $key => $value) {
                $body .="<tr><td>" . $key . "</td><td>" . $value . "</td></tr>";
            }
            $body.="</table>";



            $this->load->helper('swiftmailer');
            $mailSent = swiftMailer('info@saghealthscience.com', 'Contact Detail of Patnership Request', $body);
            $m = json_decode($mailSent);
            if ($m->status) {
                $this->session->set_flashdata('msg', 'Thanku for reqesting with sag health science lab for partnership you application is submitted successfully');
            } else {
                $this->session->set_flashdata('msg', 'Server down please try later');
            }
            redirect(base_url() . 'partnership');
        }
    }

    public function gallery() {
        $data['allGalleries'] = $this->db->get('r_gallery')->result_array();
		//echo '<pre>';print_r($data);die;
        $this->parts('gallery', $data);
    }

    private function parts($page, $data = null) {
		
        $data['mainCategories'] = $this->databaseoperations->allActiveMainCategory();
        //$data['allAbout'] = $this->databaseoperations->getResultAll('r_about');
        $data['header'] = $this->load->view('common/header', $data, true);
        //$data['menu'] = $this->load->view('parts/menu', $data, true);
        $data['footer'] = $this->load->view('common/footer', $data, true);
        $data['style_script'] = $this->load->view('common/style_script', $data, true);
        $data['otherJs'] = $this->load->view('common/otherJs', $data, true);
        $this->load->view($page, $data);
    }

}
