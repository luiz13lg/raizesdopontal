<?php

    class produto_model extends CI_Model{
        public function salvar($produto){
            $this->db->insert("produto",$produto);
        }

        public function teste(){
        	$this->db->select('*');
        	return $this->db->from('Produto')->get()->result();

        }
    }


?>