<?php

    class produtor_model extends CI_Model{
        public function salvar($produtor){
            $this->db->insert("produtor",$produtor);
        }
    }

?>