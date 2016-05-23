<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function main(){
		parent::__construct();

	}

	public function index(){
		$this->load->view('top');
		$this->load->view("index");
		$this->load->view('bottom');

	}
	public function test(){
		$this->load->view('top');
		$this->load->view("second-top");
		$this->load->view('bottom');

	}
	
}
