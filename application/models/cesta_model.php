<?php
    class cesta_model extends CI_Model{
        public function salvar($cesta){
            $this->db->insert("cesta", $cesta);
        }

        public function teste(){
        	$this->db->select('*');
        	return $this->db->from('Cesta')->get()->result();

        }

    }
?>