<?php

    class Produtor extends CI_Controller{

        public function cadastrar(){
            $this->load->view('headerIndex');
            $this->load->view('cadastroprodutor');
            $this->load->view('footer');
        }

        public function salvar(){
            $produtor = array(
                "nomeUsuario" => $this->input->post("nome"),
                "telProdutor" => $this->input->post("telefone"),
                "ruaProdutor" => $this->input->post("rua"),
                "nrProdutor" => $this->input->post("numero"),
                "bairroProdutor" => $this->input->post("bairro"),
                "cidadeProdutor" => $this->input->post("cidade"),
                "estadoProdutor" => $this->input->post("estado"),
                "tipoUsuario" => 1,
                "emailUsuario" => $this->input->post("email"),
                "senhaUsuario" => md5($this->input->post("senha"))
            );

            $_SESSION['mensagem'] = null;

            $this->load->model('produtor_model');
            $this->produtor_model->salvar($produtor);

            if($_SESSION['mensagem'] == null)
                echo "<script>alert('Erro ao cadastrar produtor!')</script>";
			else echo "<script> alert('Produtor cadastrado!') </script>";

            $this->load->view('headerDashboard');
		    $this->load->view('cadastroprodutor');
		    $this->load->view('footerDashboard');
	    }

        public function index(){
            $this->load->model('produto_model');
            $resultado = $this->produto_model->recupera($_SESSION['idProdutor']);
            $this->load->model('cesta_model');
            $resultadoCesta = $this->cesta_model->teste();

            $this->load->view('headerDashboardProdutor');
            $this->load->view('indexDashboardProdutor', array('resultado' => $resultado, 'resultadoCesta' => $resultadoCesta));
            $this->load->view('footerDashboard');

        }
    }
?>