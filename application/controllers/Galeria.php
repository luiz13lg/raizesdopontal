<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeria extends CI_Controller {

	public function index(){
		$this->load->view('headerIndex');
		$this->load->view('galeria');
		$this->load->view('footer');
	}

}