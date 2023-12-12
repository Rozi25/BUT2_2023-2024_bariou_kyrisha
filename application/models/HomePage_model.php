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
            $slug = str_replace('%C3%A9', 'é', $slug);
            $this->db->select('*');
            $this->db->from('produit');
            $this->db->where('categorie' , $slug);
            $query = $this->db->get();

            return $query->result_array();
        }
        public function getDescr($slug = FALSE){
            // if($slug === FALSE){
            //     $query = $this->db->query("SELECT type FROM produit");
            //     //$query = $this->db->get('produit');
            //     return $query->result_array();
            // }
            $slug = str_replace('%20', ' ', $slug);
            $slug = str_replace('%C3%A9', 'é', $slug);
            $this->db->select('*');
            $this->db->from('produit');
            $this->db->where('type' , $slug);
            $query = $this->db->get();

            return $query->result_array();
        }
    }

    

