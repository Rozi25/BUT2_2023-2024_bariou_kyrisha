<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HomePage extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('HomePage_model');
        $this->load->library('form_validation');
        $this->load->library('session');
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
    public function login_validation(){
        
            // Validation successful, check login credentials
            $login = $this->input->post('login');
            $password = $this->input->post('password');

            // Check user credentials in the database
            $user = $this->HomePage_model->check_login($login, $password);

            if ($user) {
                $this->session->set_userdata('utilisateur_id', $user->id);
                $data['title'] = "Home page";
        $data['categorie'] = $this->HomePage_model->getCategorie();
        $data['marque'] = $this->HomePage_model->getMarque();

        $this->load->helper('url');
        $this->load->view('templates/header', $data);
        $this->load->view('homePage/index', $data);
        $this->load->view('templates/footer');
                // Set session data or perform other actions for successful login
                // Example: $this->session->set_userdata('user_id', $user->id);
                //redirect('index'); // Redirect to the dashboard or any other page
            } else {
                // Invalid login credentials, redirect to login page
                $data['title'] = "Connexion";
        $this->load->helper('url');
        
        $this->load->view('homePage/connexion', $data);
            }
        




       
    }

}