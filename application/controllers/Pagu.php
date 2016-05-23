<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pagu extends CI_Controller {

	public function pagu(){
		parent::__construct();

	}

	public function index(){
		$this->load->view('top');
		$this->load->view("pagu/pagu_view");
		$this->load->view('bottom');
	}


	
}
