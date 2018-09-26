<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sugestoes extends CI_Controller {

	public function index(){
		$this->load->view('headerIndex');
		$this->load->view('sugestoes');
		$this->load->view('footer');
	}

}