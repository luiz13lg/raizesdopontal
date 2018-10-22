<?php

    class produto_model extends CI_Model{
        public function salvar($produto){
            $this->db->insert("produto",$produto);
        }
    }

?>