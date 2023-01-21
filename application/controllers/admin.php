<?php 
 
class Admin extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			return redirect ("login_controller/masuk"); //jika tidak login dan diback dari browser akan tetap pada vi_login
		}
	}
 
	function index(){
		$this->load->view('home');
	}
}