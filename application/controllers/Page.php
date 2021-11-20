<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	function __construct(){
		parent::__construct();
	}

	// página inicial
	function index(){
		$id_usuario = $this->session->usuario_logado['id_usuario'];
		// Passando dados do usuário para a view
		$data['dados_usuario'] = $this->usuarios_model->getUserData($id_usuario);

		$this->load->view('view_home', $data);
	}

	// chama o framework shop e carrega o json com os produtos
	function produtos(){
		$data['produtos'] = $this->produtos_model->selectProtudos();
		$this->load->view('view_produtos', $data);
	}

	// manutenção de produtos
	function cadastro_produtos(){
		if($this->session->userdata("usuario_logado")){
			$crud = new Grocery_CRUD();

			$crud->set_table("produto");
			$crud->set_subject("Produto");
	    	$crud->unique_fields("nome");

			$crud->set_rules('preco','Preço','numeric');

			$crud->set_field_upload('imagem','assets/uploads');
			$crud->required_fields("nome", "preco", "imagem", "descricao");
			$crud->callback_column('preco',array($this,'_callback_coluna_preco'));

			$form = $crud->render();
			$this->load->view('view_cadastro_produtos', $form);
		}else{
			$this->load->view('view_login');
		}
	}

	// coloca R$ antes dos preços dos produtos na tabela
	function _callback_coluna_preco($value, $row){
		return "R$ $value";
	}

	// manutenção de usuários
	function cadastro_usuarios(){
		if($this->session->userdata("usuario_logado")){
			$crud = new Grocery_CRUD();

			$crud->set_table("usuarios");
			$crud->set_subject("Usuário");
	    	$crud->unique_fields("login");

	    	
	    	$crud->columns("nome", "login");
	    	$crud->required_fields("nome", "login", "senha", "confirma");

	    	$crud->field_type("senha", "password");
	    	$crud->field_type("confirma", "password");
	    	$crud->display_as("confirma", "Confirmar Senha");
	    	$crud->set_rules("confirma", "Confirmar Senha", "matches[senha]|min_length[6]");

	    	$crud->callback_before_insert(array($this, "remove_confirma"));
	    	$crud->callback_before_update(array($this, "remove_confirma"));

	    	$crud->fields("nome", "login", "senha", "confirma");

			$form = $crud->render();
			$this->load->view('view_cadastro_usuarios', $form);
		}else{
			$this->load->view('view_login');
		}
	}

	public function remove_confirma($post_array){
		unset($post_array['confirma']); //remove confirma
	    $post_array['senha'] = base64_encode(md5($post_array['senha'])); //aplica base64, depois md5 a senha
		return $post_array;

	}
	
}