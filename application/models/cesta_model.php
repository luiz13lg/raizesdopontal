<?php
    class cesta_model extends CI_Model{
        public function salvar($cesta){
            return $this->db->insert("cesta", $cesta);
        }

        public function teste(){
        	$this->db->select('*');
        	return $this->db->from('Cesta')->get()->result();
        }

        public function remover($tipoCesta){
            $this->db->select('*');
            $this->db->where('tipoCesta',$tipoCesta);
            return $this->db->delete('cesta');
        }
    }
?>