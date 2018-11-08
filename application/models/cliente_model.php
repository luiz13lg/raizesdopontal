<?php

class cliente_model extends CI_Model{
    public function salva($usuario){
        $this->db->insert("cliente", $usuario);
    }

    public function logar($usuario){
        $this->db->where($usuario);
        return $this->db->get('cliente')->result();
    }
}

?>