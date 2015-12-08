<?php

class Blog extends CI_Controller{
    #code       
    public function index() {
        //echo "Estamos en el indice";
        $data=array(
          'titulo'      =>  'Blog CodeIgniter',
          'cabecera'    =>  'Una cabecera',
          'mensaje'     =>  'Un mensaje a mi familia que me esta viendo'
        );
        $this->load->view('blogview', $data);
    }
    
    public function comments(){
        echo "Esto en el comentario";
    }
    
    public function producto($producto="no hay", $id="ninguno"){
        echo ucfirst(urldecode($producto));
        echo "</BR>";
        echo ucfirst(urldecode($id));
    }
}
