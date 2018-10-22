<?php

class cliente_model extends CI_Model{
    public function salva($usuario){
        $this->db->insert("cliente", $usuario);
    }
}

?>