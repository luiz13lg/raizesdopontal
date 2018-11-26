<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


	public function index(){
		
		$this->load->view('headerIndex');
		$this->load->view('cadastroproduto');
		$this->load->view('footer');
	}

	public function novo(){
		$produto = array(
			"nomeProduto"=> $this->input->post('nome'),
			"qtdProduto"=>$this->input->post('quantidade'),
			"valorProduto"=> $this->input->post('valor'),
			"descricaoProduto"=>$this->input->post('descricao')
		);

		// $this->load->view('headerIndex');
		// $this->load->view('cadastroproduto');
		// $this->load->view('footer');


		
		$this->load->model('produto_model');
		$this->produto_model->salvar($produto);
	}

	

}