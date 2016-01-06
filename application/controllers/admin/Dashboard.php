<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends Admin_Controller{
	
    function __construct(){
		parent::__construct();	
	}
	public function index() {
		$this->load->view('templates/header', $data);
		$this->load->view('admin/dasboard_view');
		$this->load->view('templates/footer');
	}
	
	
}

?>