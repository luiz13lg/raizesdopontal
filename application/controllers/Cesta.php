<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cestas extends CI_Controller{
    public function cadastro(){
		$this->load->view('headerIndex');
		$this->load->view('cesta');
		$this->load->view('footer');
	}

	public function nova(){
		$cesta = array(
			"tipoCesta" => $this->input->post("descricao"),
            "valorCesta"=>$this->input->post("ingrediente"),
            "produtosCesta"=>$this->input->post("ingrediente")
		);

		$this->load->view('headerIndex');
		$this->load->view('cadastroCesta');
		$this->load->view('footer');

		$this->load->model('cesta_model');
		$this->receita_model->salvar($cesta);
	}
}
?>