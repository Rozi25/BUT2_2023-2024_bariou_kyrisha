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
            if($slug === FALSE){
                $query = $this->db->query("SELECT type FROM produit WHERE categorie = '$slug'");
                //$query = $this->db->get('produit');
                return $query->result_array();
            }
            $query = $this->db->query("SELECT type FROM produit WHERE categorie = '$slug'");

            return $query->row_array();
        }
    }

    

