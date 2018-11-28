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

    public function reservarCesta($tipo,$id_cliente){
        $count = ($this->db->select('qtdCesta')->from('cesta')->where('tipoCesta', $tipo)->get()->row()->qtdCesta);
        if($count > 0){
            $this->db->flush_cache();

            $dados['id_cliente'] = $id_cliente;
            $dados['tipoCesta'] = $tipo;

            return $this->db->insert('reserva',$dados);
        }else{
            return false;
        }
    }

    public function teste(){
        $this->db->select('*');
        $this->db->from('cliente');
        $this->db->join('reserva', 'cliente.idCliente = reserva.id_cliente');
        return $this->db->get()->result();
    }
}

?>