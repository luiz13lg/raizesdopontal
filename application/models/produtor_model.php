<?php

    class produtor_model extends CI_Model{
        public function salvar($produtor){
            return $this->db->insert("produtor", $produtor);
        }
    }

?>