<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receita extends CI_Controller {

	public function receitas(){
		$this->load->view('headerIndex');
		$this->load->view('receitas');
		$this->load->view('footer');
	}

	public function cadastrar(){
		$this->load->view('headerIndex');
		$this->load->view('cadastroreceita');
		$this->load->view('footer');
	}

	public function nova(){

		$receita = array(
			"nomeReceita" => $this->input->post('nome'),
			"descricaoReceita" => $this->input->post("descricao"),
			"ingredienteReceita"=>$this->input->post("ingrediente")
			// "fotoReceita" => $this->input->post("nome")
		);

		$this->load->view('headerIndex');
		$this->load->view('cadastroreceita');
		$this->load->view('footer');

		$this->load->model('receita_model');
		$this->receita_model->salvar($receita);
	}

}