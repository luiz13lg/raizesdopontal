<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


	public function index(){
		
		$this->load->view('headerIndex');
		$this->load->view('cadastroproduto');
		$this->load->view('footer');
	}


}