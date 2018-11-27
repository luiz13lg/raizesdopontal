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
			'senhaUsuario' => $this->input->post("senha"),	//colocar segurança!
		);

		$this->load->model('cliente_model');
		$resultado = $this->cliente_model->logar($usuario);

		if(empty($resultado)){	//registro não encontrado
			redirect(base_url('Cliente/cadastro'));
		}
		else{
			$_SESSION['nome'] = $resultado[0]->nomeUsuario;
			$_SESSION['email'] = $resultado[0]->emailUsuario;
			$_SESSION['logado'] = TRUE;
			$_SESSION['tipoUsuario'] = $resultado[0]->tipoUsuario;

			if($newdata['tipoUsuario'] == 0){	//admin
				// $this->session->set_userdata($newdata);
				redirect(base_url('Admin/index'));
			}
			if($newdata['tipoUsuario'] == 1){	//produtor
				redirect(base_url('Receita/cadastrar'));
			}
			if($newdata['tipoUsuario'] == 3){	//cliente
				redirect(base_url('Receita/cadastrar'));
			}
		}
	}
}