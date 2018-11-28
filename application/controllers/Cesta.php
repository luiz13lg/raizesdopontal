<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Cesta extends CI_Controller{
		public function cadastro(){
			$this->load->view('headerIndex');
			$this->load->view('cadastroCesta');
			$this->load->view('footer');
		}

		public function nova(){
			$cesta = array(
				"tipoCesta" => $this->input->post("descricao"),
				"frutasCesta"=>$this->input->post("frutas"),
				"legumesCesta"=>$this->input->post("legumes"),
				"raizesCesta"=>$this->input->post("raizes"),
				"qtdCesta"=>$this->input->post("quantidade"),
				"verdurasCesta"=>$this->input->post("verduras")
			);

			$_SESSION['mensagem'] = null;

			$this->load->model('cesta_model');

			if($this->cesta_model->salvar($cesta)){
				$this->session->set_flashdata('mensagem','Sucesso!');
				$this->session->set_flashdata('color','success');
			}else{
				$this->session->set_flashdata('mensagem','Erro!');
				$this->session->set_flashdata('color','danger');
			}
				
			redirect('Admin/cadastroCesta');
		}

		public function cestas(){
		$this->load->model('produto_model');
		$resultado = $this->produto_model->teste();
		$this->load->model('cesta_model');
		$resultadoCesta = $this->cesta_model->teste();

		$this->load->view('headerIndex');
		$this->load->view('verCestas', array('resultado' => $resultado, 'resultadoCesta' => $resultadoCesta));
		$this->load->view('footer');
	}
	}

	
?>