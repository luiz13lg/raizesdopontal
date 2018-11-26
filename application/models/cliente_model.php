<?php

class cliente_model extends CI_Model{
    public function salva($usuario){
        $this->db->insert("cliente", $usuario);
    }

    public function logar($usuario){
        $this->db->where($usuario);
        $this->db->select(*);
        return $this->db->from('cliente');
        return $this->db->get('cliente')->result();

        // $this->db->select('*');    
        // $this->db->from('table1');
        // $this->db->join('table2', 'table1.id = table2.id');
        // $this->db->join('table3', 'table1.id = table3.id');
        // $query = $this->db->get();
        //
        //return $this->db->get('produtor')->result();
        //return $this->db->get('administrador')->result();
    }
}

?>