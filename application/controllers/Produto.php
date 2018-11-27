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
			"descricaoProduto"=>$this->input->post('descricao'),
			"idProdutor"=>$_SESSION['idProdutor']
		);

		$_SESSION['mensagem'] = null;
		$this->load->model('produto_model');
		
		if($this->produto_model->salvar($produto)){
			$this->session->set_flashdata('mensagem', "Sucesso!");
			$this->session->set_flashdata('color', "success");
		}else{
			$this->session->set_flashdata('mensagem', "Sucesso!");
			$this->session->set_flashdata('color', "danger");
		}


		redirect('Produtor/cadastroProduto');
		// $this->load->view('headerIndex');
		// redirect(base_url('Produtor/cadastroproduto'));
		// $this->load->view('footerDashboard');
	}

	public function produtos(){
		$this->load->model('produto_model');
		$resultado = $this->produto_model->teste();
		$this->load->model('cesta_model');
		$resultadoCesta = $this->cesta_model->teste();

		$this->load->view('headerIndex');
		$this->load->view('verProdutos', array('resultado' => $resultado, 'resultadoCesta' => $resultadoCesta));
		$this->load->view('footer');
	}

	public function listaProdutos(){
		$this->load->model('produto_model');
		$resultado = $this->produto_model->teste();

		$this->load->view('headerDashboard');
		$this->load->view('adicionarProduto', array('resultado' => $resultado));
		$this->load->view('footer');
	}
}