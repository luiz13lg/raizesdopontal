<?php

    class produtor_model extends CI_Model{
        public function salvar($produtor){
            $this->db->insert("produtor", $produtor);
            $_SESSION['mensagem'] = 'Produtor cadastro com sucesso!';
        }
    }

?>