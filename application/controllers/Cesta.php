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
				"verdurasCesta"=>$this->input->post("verduras")
			);

			$_SESSION['mensagem'] = null;

			$this->load->model('cesta_model');
			$this->cesta_model->salvar($cesta);

			if($_SESSION['mensagem'] == null)
				echo "<script>alert('Erro ao cadastrar cesta!')</script>";
			else echo "<script> alert('Cesta cadastrada!') </script>";

			$this->load->view('headerDashboard');
			$this->load->view('cadastroCesta');
			$this->load->view('footerDashboard');

		}
	}
?>