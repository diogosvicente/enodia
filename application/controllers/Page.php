<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	// página inicial
	function index(){
		$this->load->view('view_home');
	}

	// chama o framework shop
	function produtos(){
		$data['produtos'] = $this->produtos_model->selectProtudos();
		$this->load->view('view_produtos', $data);
	}

	// carrega o json com os produtos
	function cadastro_produtos(){
		$crud = new Grocery_CRUD();
		$crud->set_table("produto");
		$crud->set_field_upload('imagem','assets/uploads');
		$crud->required_fields("nome", "preco", "imagem", "descricao");
		$crud->callback_column('preco',array($this,'_callback_coluna_preco'));
		//$crud->callback_field('preco',array($this,'_callback_preco'));
		$form = $crud->render();
		$this->load->view('view_cadastro_produtos',$form);
	}

	function _callback_coluna_preco($value, $row){
		return "R$ $value";
	}

	/*function _callback_preco($value = '', $primary_key = null){
		return '+30 <input type="text" maxlength="50" value="'.$value.'" name="preco" style="width:462px">';
	}*/
	
}


