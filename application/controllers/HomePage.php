<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('homePage_model');
	}

    public function index(){
        $data['title'] = "Home page";
        $data['categorie'] = $this->homePage_model->getCategorie();
        $data['marque'] = $this->homePage_model->getMarque();

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/index', $data);
        $this->load->view('templates/footer');
    }

    public function listProduit($slug = NULL){
        $data['listProduit'] = $this->homePage_model->getType($slug);

        if(empty($data['listProduit'])){
            show_404();
        }

        $data['categorie'] = $this->homePage_model->getCategorie();
        
        $data['content'] = $data['listProduit']['type'];

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/listProduit', $data);
        $this->load->view('templates/footer');
    }
}