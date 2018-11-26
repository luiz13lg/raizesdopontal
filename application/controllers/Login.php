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
			'emailCliente' => $this->input->post("email"),
			'senhaCliente' => md5($this->input->post("senha")),
		);

		$this->load->model('cliente_model');
		$resultado = $this->cliente_model->logar($usuario);

		//  var_dump($resultado);
		//  die();

		if(empty($resultado)){
			redirect(base_url('Cliente/cadastro'));
		}
		else{
			$newdata = array(
				'id' => $resultado[0]->id,
				'nome' => $resultado[0]->nomeusuario,
				'email' => $resultado[0]->emailusuario,
				'logado' => TRUE
			);
			$this->session->set_userdata($newdata);
			redirect(base_url('Receita/cadastrar'));

			/*
				criar id de tipos de usuário, cliente 1, produtor 2, administrador 3;
				ao realizar login, procurar nas tabelas de cliente e produtor 
				o email dado e retornar o tipo de usuario para então veriricar aqui qual tela de login chamar;
				Então ficará apenas uma tela de login para todos usuários!
			*/
		}
	}
}