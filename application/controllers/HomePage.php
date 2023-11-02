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

        $this->load->view('templates/header', $data);
        $this->load->view('homePage/index', $data);
        $this->load->view('templates/footer');
    }
}