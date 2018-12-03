<?php
    class cesta_model extends CI_Model{
        public function salvar($cesta){
            return $this->db->insert("cesta", $cesta);
        }

        public function teste(){
            $this->db->select('*');
            $this->db->from('tbl_cesta');
            $this->db->join('Produto','tbl_cesta.idProduto = Produto.idProduto');

            return $this->db->get()->result();
        }

        public function remover($tipoCesta){
            $this->db->select('*');
            $this->db->where('tipoCesta',$tipoCesta);
            return $this->db->delete('cesta');
        }

        public function addCesta($cesta){
            $this->db->select('*');
            $this->db->from('tbl_cesta');
            $this->db->where('tipoCesta', $cesta['tipoCesta']);
            $this->db->where('idProduto', $cesta['idProduto']);
            
            $existente = $this->db->get()->result();
            
            if(!empty($existente)){
                $procedure = 'CALL atualizaQtdPedidoCesta(?, ?, ?)';
                return $this->db->query($procedure,array('qtd'=>$cesta['qtdProdutoCesta'],'id'=>$existente[0]->idProduto, 'cesta'=>$existente[0]->tipoCesta));
            }else return $this->db->insert("tbl_cesta", $cesta);
        }
    }
?>