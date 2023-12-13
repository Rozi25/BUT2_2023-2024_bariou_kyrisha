<?php
    class HomePage_model extends CI_Model{
        public function __construct(){
            //parent::__construct();
            $this->load->database();
        }

        public function getCategorie($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->query("SELECT DISTINCT categorie FROM produit");
                //$query = $this->db->get('produit');
                return $query->result_array();
            }
            $query = $this->db->get_where('produit', array('categorie' => '$slug'));

            return $query->row_array();
        }

        public function getMarque($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->query("SELECT DISTINCT marque FROM produit");
                //$query = $this->db->get('produit');
                return $query->result_array();
            }
            $query = $this->db->query("SELECT DISTINCT marque FROM produit WHERE id = $slug");
            
            return $query->row_array();
        }

        public function getType($slug = FALSE){
            // if($slug === FALSE){
            //     $query = $this->db->query("SELECT type FROM produit");
            //     //$query = $this->db->get('produit');
            //     return $query->result_array();
            // }
            $slug = str_replace('%20', ' ', $slug);
            $slug = str_replace('%27', "'", $slug);
            $slug = str_replace('%C3%A0', 'à', $slug);
            $slug = str_replace('%C3%A9', 'é', $slug);
            
            $this->db->select('*');
            $this->db->from('produit');
            $this->db->where('categorie' , $slug);
            $query = $this->db->get();

            return $query->result_array();
        }
        public function getDescr($slug = FALSE){
            
            $this->db->select('*');
            $this->db->from('produit');
            $this->db->where('id' , $slug);
            $query = $this->db->get();

            return $query->result_array();
        }

        public function check_login($login, $password) {
            // Fetch user from the database based on username and password
            $this->db->select('*');
            $this->db->from('utilisateur');
            $this->db->where('login', $login);
            $this->db->where('password', ($password)); // You may want to hash the password in the database
            $query = $this->db->get();
    
            if ($query->num_rows() == 1) {
                return $query->row();
            } else {
                return false;
            }
        }

    }

    

