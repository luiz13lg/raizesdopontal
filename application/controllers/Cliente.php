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
			"nomeCliente"=> $this->input->post('nome'),
			"emailCliente"=> $this->input->post("email"),
			"senhaCliente"=> md5($this->input->post("senha")),
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
}