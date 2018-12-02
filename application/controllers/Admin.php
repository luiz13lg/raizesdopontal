<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('cliente_model');
		$this->cliente_model->verificar('0');
	}

	public function index(){
		$this->load->model('produto_model');
		$dados['resultado'] = $this->produto_model->teste();
		
		$this->load->model('cesta_model');
		$dados['resultadoCesta'] = $this->cesta_model->teste();
		
		$this->load->model('cliente_model');
		$dados['resultadoReserva'] = $this->cliente_model->teste();

		$this->load->view('headerDashboard');
		$this->load->view('indexDashboard', $dados);
		$this->load->view('footerDashboard');
	}

	public function cadastroProduto(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroProduto');
		$this->load->view('footerDashboard');
	}

	public function cadastroCesta(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroCesta');
		$this->load->view('footerDashboard');
	}

	public function cadastrarProdutor(){
		$this->load->view('headerDashboard');
		$this->load->view('cadastroprodutor');
		$this->load->view('footerDashboard');
	}

	public function removerCesta($tipoCesta){
		$this->load->model('cesta_model');
		
		if($this->cesta_model->remover($tipoCesta)){
			$this->session->set_flashdata('mensagem', "Sucesso!");
			$this->session->set_flashdata('color', "success");
		}else{
			$this->session->set_flashdata('mensagem', "Erro!");
			$this->session->set_flashdata('color', "danger");
		}
		redirect('Admin/');
	}

	public function removerProduto($idProduto){
		$this->load->model('produto_model');
		
		if($this->produto_model->remove($idProduto)){
			$this->session->set_flashdata('mensagem', "Sucesso!");
			$this->session->set_flashdata('color', "success");
		}else{
			$this->session->set_flashdata('mensagem', "Erro!");
			$this->session->set_flashdata('color', "danger");
		}
		redirect('Admin/');
	}

	public function logout(){
		session_start();
		session_destroy();

		redirect('Login/');
	}

	public function salvarProdutor(){

		$produtor = array(
			"nomeUsuario" => $this->input->post("nome"),
			"telProdutor" => $this->input->post("telefone"),
			"ruaProdutor" => $this->input->post("rua"),
			"nrProdutor" => $this->input->post("numero"),
			"bairroProdutor" => $this->input->post("bairro"),
			"cidadeProdutor" => $this->input->post("cidade"),
			"estadoProdutor" => $this->input->post("estado"),
			"tipoUsuario" => 1,
			"emailUsuario" => $this->input->post("email"),
			"senhaUsuario" => $this->input->post("senha")
		);

		$_SESSION['mensagem'] = null;

		$this->load->model('produtor_model');

		if($this->produtor_model->salvar($produtor)){
			$this->session->set_flashdata('mensagem', "Sucesso!");
			$this->session->set_flashdata('color', "success");
		}
		else{
			$this->session->set_flashdata('mensagem', "Erro!");
			$this->session->set_flashdata('color', "danger");
		}

		// if($_SESSION['mensagem'] == null)
		//     echo "<script>alert('Erro ao cadastrar produtor!')</script>";
		// else echo "<script> alert('Produtor cadastrado!') </script>";

		redirect('Admin/cadastrarProdutor');
		// $this->load->view('headerDashboard');
		// $this->load->view('cadastroprodutor');
		// $this->load->view('footerDashboard');
	}

}