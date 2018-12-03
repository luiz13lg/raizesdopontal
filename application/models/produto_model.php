<?php

    class produto_model extends CI_Model{
        
        public function salvar($produto){
            $this->db->select('*');
            $this->db->from('Produto');
            $this->db->where('nomeProduto', $produto['nomeProduto']);
            $this->db->where('idProdutor', $produto['idProdutor']);
            
            $existente = $this->db->get()->result();
            
            if(!empty($existente)){
                $procedure = 'CALL atualizaQtdProduto(?, ?)';
                return $this->db->query($procedure,array('qtd'=>$produto['qtdProduto'],'id'=>$existente[0]->idProduto));
            }else 
            return $this->db->insert("produto",$produto);
        }

        public function teste(){
        	$this->db->select('*');
            $this->db->from('Produto'); //->get()->result();
            $this->db->join('Produtor','Produto.idProdutor = Produtor.idProdutor');

            return $this->db->get()->result();
        }

        public function recupera($idProdutor){
            $this->db->select('*');
            $this->db->where('idProdutor',$idProdutor);
            return $this->db->from('Produto')->get()->result();
        }

        public function remove($idProduto){
            $this->db->select('*');
            $this->db->where('idProduto',$idProduto);
            return $this->db->delete('produto');
        }

    }


?>