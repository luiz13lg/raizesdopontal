<?php

    class produto_model extends CI_Model{
        public function salvar($produto){
            return $this->db->insert("produto",$produto);
        }

        public function teste(){
        	$this->db->select('*');
        	return $this->db->from('Produto')->get()->result();
        }

        public function recupera($idProdutor){
            $this->db->select('*');
            $this->db->where('idProdutor',$idProdutor);
            return $this->db->from('Produto')->get()->result();
        }

        public function remove($idProduto){
            $this->db->select('*');
            $this->db->where('idProduto',$idProduto);
            return $this->db->delete('produto');
        }

    }


?>