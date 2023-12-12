<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('HomePage_model');
	}

    public function index(){
        $data['title'] = "Home page";
        $data['categorie'] = $this->HomePage_model->getCategorie();
        $data['marque'] = $this->HomePage_model->getMarque();

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/index', $data);
        $this->load->view('templates/footer');
    }

    public function listProduit($slug = FALSE){
        $data['title'] = "Categorie";
        $data['listProduit'] = $this->HomePage_model->getType($slug);

        if(empty($data['listProduit'])){
            show_404();
        }

        $data['categorie'] = $this->HomePage_model->getCategorie();
        
        $data['content'] = $data['listProduit'];

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/listProduit', $data);
        $this->load->view('templates/footer');
    }


    public function descripProduit($slug = FALSE){
        $data['title'] = "Description";
        $data['descripProduit'] = $this->HomePage_model->getDescr($slug);

        if(empty($data['descripProduit'])){
            show_404();
        }

        $data['categorie'] = $this->HomePage_model->getCategorie();
        
        $data['content'] = $data['descripProduit'];

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/descripProduit', $data);
        $this->load->view('templates/footer');
    }

    public function connexion(){
        $data['title'] = "Connexion";
        

        $this->load->helper('url');
        
        $this->load->view('homePage/connexion', $data);
        
    }
}