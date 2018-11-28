<?php

class cliente_model extends CI_Model{
    public function salva($usuario){
        $this->db->insert("cliente", $usuario);
    }

    public function logar($usuario){
        $this->db->select('*');
        $this->db->where($usuario);
        $this->db->from('administrador');     //retornando um administrador
        $busca = $this->db->where($usuario)->get()->result();
        if(!empty($busca)){
            return ($busca);
        }

        $this->db->from('produtor');     //retornando um produtor
        $busca = $this->db->where($usuario)->get()->result();
        if(!empty($busca)){
            return ($busca);
        }
  
        $this->db->from('cliente');     //retornando um cliente
        $busca = $this->db->where($usuario)->get()->result();
        if(!empty($busca)){
            return ($busca);
        }
    }

    public function fazerPedido($pedido){
        return $this->db->insert("reserva",$pedido);
        var_dump($pedido);
        die();
    }
}

?>