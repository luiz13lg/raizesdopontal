<?php

    class receita_model extends CI_Model{
        public function salvar($receita){
            $this->db->insert("receita",$receita);
        }
    }

?>