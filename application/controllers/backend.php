<?php
if (!defined('BASEPATH'))
	exit ('No direct script access allowed');

class Backend extends CI_Controller {
	public function __construct() {
		parent :: __construct();
		$this->load->helper(array (
			'html',
			'url'
		));
		$this->load->library('grocery_CRUD');
	}
	
	public function signout(){
		$this->session->unset_userdata('signedin');
		$this->index();
	}
	
	public function index() {
		
		$error = NULL;
		
		if(isset($_POST['do_login'])){
			$names 		= $this->input->post('usuario');
			$password 	= $this->input->post('clave');
			$login =  $this->config->item('login');
			
			if($names == $login['name'] && $password == $login['password']){
				$this->session->set_userdata('signedin', true);
				redirect('backend/data');
				return true;
			} else {
				$error = 'Autenticación no válida';
			}
		}
		
		$this->load->view('login', array('error' => $error));
		
	}

	public function data() {
		
		if(!$this->session->userdata('signedin')){
			redirect('backend');
		}
		
		$this->grocery_crud->set_table('data');
		
		$output = $this->grocery_crud->render();
		$this->_show($output);
		
	}

	private function _show($output = null) {
		$this->load->view('backend', $output);
	}

}