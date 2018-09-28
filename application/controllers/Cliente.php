<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

	public function index(){
		
		$this->load->view('headerIndex');
		$this->load->view('cliente');
		$this->load->view('footer');
	}

	public function cadastro(){
		
		$this->load->view('headerIndex');
		$this->load->view('cadastrocliente');
		$this->load->view('footer');
	}


}