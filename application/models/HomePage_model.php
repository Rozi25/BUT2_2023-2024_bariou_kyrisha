<?php
    class HomePage_model extends CI_Model{
        public function __construct(){
            //parent::__construct();
            $this->load->database();
        }

        public function getCategorie($slug = FALSE){
            if($slug === FALSE){
                $query = $this->db->get('produit');
                return $query->result_array();
            }
            
            $query = $this->db->get_where('produit', array('id' => $slug));
            return $query->row_array();
        }
    }

    

