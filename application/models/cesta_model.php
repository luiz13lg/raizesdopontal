<?php
    class cesta_model extends CI_Model{
        public function salvar($cesta){
            $this->db->insert("cesta", $cesta);
        }
    }
?>