<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receita extends CI_Controller {

	public function index(){
		$this->load->view('headerIndex');
		$this->load->view('receitas');
		$this->load->view('footer');
	}

	public function nova(){
		$this->load->view('headerIndex');
		$this->load->view('cadastroreceita');
		$this->load->view('footer');
	}

}