<?php

    class Produtor extends CI_Controller{

        public function cadastrar(){
            $this->load->view('headerIndex');
            $this->load->view('cadastroprodutor');
            $this->load->view('footer');
        }

        public function salvar(){
            $produtor = array(
                "nomeProdutor" => $this->input->post("nome"),
                "telProdutor" => $this->input->post("telefone"),
                "ruaProdutor" => $this->input->post("rua"),
                "nrProdutor" => $this->input->post("numero"),
                "bairroProdutor" => $this->input->post("bairro"),
                "cidadeProdutor" => $this->input->post("cidade"),
                "estadoProdutor" => $this->input->post("estado")
            );

            $this->load->view('headerIndex');
            $this->load->view('cadastroprodutor');
            $this->load->view('footer');

            $this->load->model('produtor_model');

            $this->produtor_model->salvar($produtor);
        }

    }

?>