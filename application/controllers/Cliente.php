<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function cadastro(){
		$this->load->view('headerIndex');
		$this->load->view('cadastrocliente');
		$this->load->view('footer');
	}

	public function salvar(){
		$usuario = array(
			"nomeUsuario"=> $this->input->post('nome'),
			"emailUsuario"=> $this->input->post("email"),
			"senhaUsuario"=> md5($this->input->post("senha")),
			"tipoUsuario"=> 2,
			"telCliente"=> $this->input->post('telefone'),
			"ruaCliente"=> $this->input->post('rua'),
			"nrCliente"=> $this->input->post('numero'),
			"bairroCliente"=> $this->input->post('bairro'),
			"cidadeCliente"=> $this->input->post('cidade'),
			"estadoCliente"=> $this->input->post('estado')
		);
		
		$this->load->view('headerIndex');
		$this->load->view('cadastrocliente');
		$this->load->view('footer');
		$this->load->model('cliente_model');
		$this->cliente_model->salva($usuario);
	}

	public function index(){
		$this->load->model('produto_model');
		$resultado = $this->produto_model->teste();
		$this->load->model('cesta_model');
		$resultadoCesta = $this->cesta_model->teste();

		$this->load->view('headerDashboardCliente');
		$this->load->view('indexDashboardCliente', array('resultado' => $resultado, 'resultadoCesta' => $resultadoCesta));
		$this->load->view('footerDashboard');
	}
}