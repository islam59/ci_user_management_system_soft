<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apps extends CI_Controller {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent::__construct(); 
		/*----------------------------------*/
		//MODEL AND SESSION WILL LOAD HERE... 
		/*----------------------------------*/
		/*
		$login_user = $this->session->userdata('username'); 
		if(isset($login_user)){
			$login_user; 
		}else{
			redirect('User/'); 
		} 
		*/
	}
/*********************************************************************************
*DEFAULT METHOD OF THIS CONTROLLER.. 
*/	
	public function index(){
		//$this->load->view('welcome_message');
		$this->Home(); 
	}
/*********************************************************************************/
/*********************************************************************************
*HOME / DASHBOARD METHOD... 
*/
	public function Home(){
		$data = array(); 
		/*-----------------------------------------------*/
		
		/*-----------------------------------------------*/
		$data['header'] = $this->load->view('php/Header.php',$data); 
		$data['leftmenu'] = $this->load->view('php/Leftmenu.php',$data); 
		$data['content'] = $this->load->view('php/Dashboard.php',$data); 
		$data['footer'] = $this->load->view('php/Footer.php',$data); 
		/*-------------------------------------------------*/
		$this->load->view('index',$data); 
	}
/*********************************************************************************/	

}
?>