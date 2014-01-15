<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontend extends CI_Controller {
  public function __construct () {    parent::__construct ();        $this->load->helper(      array (        'html',        'url'      )    );  }

	public function index(){
		$this->load->view('home');
	}
	
	public function formulario($efecto){
		
		if(!$efecto){
			redirect();
		}
		
		$ocupaciones = array();
		$tmp =  $this->config->item('ocupaciones');
		foreach($tmp as $t){
			$ocupaciones[$t] = $t;
		}
		
		$params = array(
			'efecto' => $efecto,
			'ocupaciones' => $ocupaciones
		);
		
		$this->load->view('formulario', $params);
	}
	
	public function save_form(){
		
		//lorealpa_1 : lorealpa_1 : MwDhTd0exlNb
		
		$this->load->model('Data_model');
		
		$this->Data_model->insert(); 

		//Whether everything is OK move to congrats page
		redirect('frontend/felicitaciones/');
	}
	
	public function felicitaciones(){ 
		$this->load->view('felicitaciones');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */