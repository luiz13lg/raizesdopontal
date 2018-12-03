<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function __construct(){
		parent:: __construct();

		$this->load->model('cliente_model');
		$this->cliente_model->verificar('2');
	}

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
		// $resultado = $this->produto_model->teste();
		// $this->load->model('cesta_model');
		// $resultadoCesta = $this->cesta_model->teste();
		$this->load->model('produto_model');
		$dados['resultado'] = $this->produto_model->teste();

		$this->load->model('cesta_model');
		$dados['cestaGrande'] = $this->cesta_model->teste('grande');
		
		$this->load->model('cesta_model');
		$dados['cestaPequena'] = $this->cesta_model->teste('pequena');

		$this->load->view('headerDashboardCliente');
		$this->load->view('indexDashboardCliente', $dados);
		$this->load->view('footerDashboard');
	}

	public function reservarCestaGrande(){
		$idUsuario = $_SESSION['idCliente'];
		$this->load->model('cesta_model');

		$tipo = array(
			'id_cliente'=>$idUsuario,
			'tipoCesta'=>'grande'
		);

		$this->cesta_model->reservarCesta($tipo);
		redirect('Cliente/');
	}

	public function reservarCestaPequena(){
		$idUsuario = $_SESSION['idCliente'];
		$this->load->model('cesta_model');

		$tipo = array(
			'id_cliente'=>$idUsuario,
			'tipoCesta'=>'pequena'
		);

		$this->cesta_model->reservarCesta($tipo);
		redirect('Cliente/');
	}

	// public function reservarCesta($tipo){
		
	// 	$this->load->model('cliente_model');
	// 	$this->cliente_model->reservarCesta($tipo,$_SESSION['idCliente']);

	// 	redirect('Cliente/index');
	// }

	public function logout(){
		session_start();
		session_destroy();

		redirect('Login/');
	}
}