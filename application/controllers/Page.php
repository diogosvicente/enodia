<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	function index(){

		$data['produtos'] = $this->produtos_model->selectProtudos();
		$this->load->view('view_home', $data);
	}

	function teste(){
		
	}
}