<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller{
    #code
    
    public function __construct(){
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		$this->load->library('calendar');
	}
    public function index() {
        //echo "Estamos en el indice";
        $data=array(
          'titulo'      =>  'Blog CodeIgniter',
          'cabecera'    =>  'Una cabecera',
          'mensaje'     =>  'Un mensaje a mi familia que me esta viendo'
        );
		
		$this->load->view('templates/header', $data);
        $this->load->view('blogview', $data);
		$this->load->view('templates/footer');
    }
    
    public function comments(){
        echo "Estoy en el comentario";
    }
    
    public function producto($producto="no hay", $id="ninguno"){
        echo ucfirst(urldecode($producto));
        echo "</BR>";
        echo ucfirst(urldecode($id));
		echo "</BR>";
		echo anchor_popup('http://google.com','Un buscador');
    }
}
