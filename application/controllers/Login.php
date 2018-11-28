<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		$this->load->view('headerIndex');
		$this->load->view('login');
		$this->load->view('footer');
	}

	public function autentication(){
		$usuario = array(
			'emailUsuario' => $this->input->post("email"),
			'senhaUsuario' => $this->input->post("senha"),
		);

		$this->load->model('cliente_model');
		$resultado = $this->cliente_model->logar($usuario);

		if(empty($resultado)){	//registro não encontrado
			$this->load->view('headerIndex');
			$this->load->view('login');
			$this->load->view('footer');			
			echo "<script>alert('Usuário ou Senha inválidos!')</script>";
		}
		else{
			$_SESSION['nome'] = $resultado[0]->nomeUsuario;
			$_SESSION['email'] = $resultado[0]->emailUsuario;
			$_SESSION['logado'] = TRUE;
			$_SESSION['tipoUsuario'] = $resultado[0]->tipoUsuario;

			if($_SESSION['tipoUsuario'] == 0){	//admin
				// $this->session->set_userdata($newdata);
				$_SESSION['idProdutor'] = 0;
				redirect(base_url('Admin/index'));
			}
			if($_SESSION['tipoUsuario'] == 1){	//produtor
				$_SESSION['idProdutor'] = $resultado[0]->idProdutor;
				redirect(base_url('Produtor/index'));
			}
			if($_SESSION['tipoUsuario'] == 2){	//cliente
				$_SESSION['idCliente'] = $resultado[0]->idCliente;
				redirect(base_url('Cliente/index'));
			}
		}
	}
}