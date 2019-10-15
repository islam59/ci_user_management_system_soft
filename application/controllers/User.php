<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
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
		$this->load->model('User_model');
		/*----------------------------------*/
	}
/*********************************************************************************
*DEFAULT METHOD OF THIS CONTROLLER.. 
*/	
	public function index(){ 
		$this->Login();  
	}
/*********************************************************************************
*LOGIN UI/UX SHOWING METHOD... 
*/
	public function Login(){
		$data = array(); 
		/*--------------------------------------------------*/
		$data['Login'] = $this->load->view('php/Login.php',$data);		
		/*--------------------------------------------------*/ 
		$this->load->view('index',$data); 
	}
/*********************************************************************************/
/*********************************************************************************
*LOGIN FUNCTIONAL METHOD... 
*/
	public function Login_From(){
		$data = array(); 
		/*---------------------------------------------------------*/
		$data['email'] = $this->input->post('email'); 
		$data['password'] = $this->input->post('password'); 
		/*---------------------------------------------------------*/

		$email = $data['email']; 
		$password = $data['password'];

		if(empty($email) OR empty($password)){
			$sdata = array();
			$sdata['msg'] = '<span style="color:red;">Login Failed !</span>'; 
			$this->session->set_flashdata($sdata);
			redirect('User',$sdata); 
		}else{

			$sdata = array();
			$check = $this->User_model->userLogin($data);
			if($check){
				$sdata = array(); 
				$sdata['user_id'] = $check->user_id;  
				$sdata['username'] = $check->username; 
				$sdata['email'] = $check->email; 
				$sdata['type'] = $check->type;
				$sdata['userlogin'] = TRUE; 
				$this->session->set_userdata($sdata);//set as session... 
				redirect('Apps/',$sdata);
			}else{
				$sdata = array();
				$sdata['msg'] = '<span style="color:red;">Invalid Username or Password !</span>'; 
				$this->session->set_flashdata($sdata);
				redirect('User/',$sdata); 
			}
		}
	}//login method end..
/*********************************************************************************/
/*********************************************************************************
*LOGIN UI/UX SHOWING METHOD... 
*/
	public function Logout(){
		//$uid = $this->session->id;
		//$this->login_model->userLoginOFF($uid);//update login status.OFF..
		$this->session->unset_userdata($user_id);
		$this->session->unset_userdata($email); 
		$this->session->unset_userdata($password);
		$this->session->unset_userdata('userlogin',FALSE);

		$this->session->sess_destroy(); 
		redirect('User',$data); 
	}
/*********************************************************************************/
/*********************************************************************************
*USER OPTION UI/UX METHOD... 
*/
	public function User_Option(){
		/*SESSION CHECKED START...*/
		$this->load->library('session');
		$login_user = $this->session->userdata('email'); 
		if(isset($login_user)){
			$login_user; 
		}else{
			redirect('User/'); 
		}/*SESSION CHECKED END.. */

		$data = array();
		/*-----------------------------------------------------------------------------------------*/
		$data['userlist'] = $this->User_model->GetAllUser($data);
		/*-----------------------------------------------------------------------------------------*/
		$data['header'] = $this->load->view('php/Header.php',$data); 
		$data['leftmenu'] = $this->load->view('php/Leftmenu.php',$data);
		$data['content']  = $this->load->view('php/Useroption',$data);
		$data['footer'] = $this->load->view('php/Footer.php',$data); 
		/*-------------------------------------------------*/
		$this->load->view('index',$data); 
	}
/*********************************************************************************/
/*********************************************************************************
*ADD NEW USER METHOD...
*/
public function  AddNewUser(){
	$data = array();
	/*-------------------------------------------------*/
	echo $data['username'] = $this->input->post('username');
	$data['email'] = $this->input->post('email');
	$data['phone'] = $this->input->post('phone'); 
	$data['type'] = $this->input->post('type'); 
	$data['password'] = md5('AIMS365'); 
	$data['address'] = $this->input->post('address'); 

	/*-------------------------------------------------*/
	if(empty($data['email']) OR empty($data['type']) OR empty($data['password'])){
		$sdata = array();
		$sdata['msg'] = '<span style="color:red;font-weight:bold;"> Failed !</span>';
		$this->session->set_flashdata($sdata);
		redirect('User/User_Option/',$sdata);
	}else{
		$data['password'] = md5($data['password']);
		$this->User_model->AddNewUser_model($data);
		$sdata = array();
		$sdata['msg'] = '<span style="color:green;font-weight:bold;"> Succesfully Done !</span>';
		$this->session->set_flashdata($sdata);
		redirect('User/User_Option/',$sdata);
	}
}
/*********************************************************************************/
/*********************************************************************************
*REMOVE USER METHOD... 
*/
public function DeleteUserById($user_id){
	$this->User_model->DeletUserByUserId($user_id);
	redirect('User/User_Option/');
}
/*********************************************************************************/
/*********************************************************************************
*USER OPTION UI/UX METHOD... 
*/
	public function User_Profile($user_id){
		/*SESSION CHECKED START...*/
		$this->load->library('session');
		$login_user = $this->session->userdata('email'); 
		if(isset($login_user)){
			$login_user; 
		}else{
			redirect('User/'); 
		}/*SESSION CHECKED END.. */

		$data = array();
		$data['user_id'] = $user_id; 
		/*-----------------------------------------------------------------------------------------*/
		$data['userData'] = $this->User_model->GetUserDataById($data);
		/*-----------------------------------------------------------------------------------------*/
		$data['header'] = $this->load->view('php/Header.php',$data); 
		$data['leftmenu'] = $this->load->view('php/Leftmenu.php',$data);
		$data['content']  = $this->load->view('php/Userprofile',$data);
		$data['footer'] = $this->load->view('php/Footer.php',$data); 
		/*-------------------------------------------------*/
		$this->load->view('index',$data); 
	}
/*********************************************************************************/
/*********************************************************************************
*USER UPDATE METHOD...
*/
	public function User_Profile_Update($user_id){ 
		$data = array(); 
		$data['user_id'] = $user_id; 
		$data['username'] = $this->input->post('username'); 
		$data['email'] = $this->input->post('email'); 
		$data['phone'] = $this->input->post('phone'); 
		$data['type'] = $this->input->post('type'); 
		$data['address'] = $this->input->post('address'); 

		$this->User_model->UpdateUserProfileById($data);
		
		$sdata = array();
		$sdata['msg'] = '<span style="color:orange;">Succesfully Updated !</span>'; 
		$this->session->set_flashdata($sdata);		
		redirect('User/User_Profile/'.$data['user_id']);  
	}
/*********************************************************************************/
/*********************************************************************************
*USER UPDATE METHOD...
*/
	public function User_Password_Update($user_id){ 
		$data = array(); 
		/*---------------------------------------------------------------*/
		$data['user_id'] = $user_id; 
		$data['old_password'] = $this->input->post('old_password'); 
		$data['password'] = $this->input->post('password'); 
		$data['confirm_password'] = $this->input->post('confirm_password'); 

		if(empty($data['old_password'])){
			$sdata = array();
			$sdata['pmsg'] = '<span style="color:orange;">Invalid !</span>'; 
			$this->session->set_flashdata($sdata);		
			redirect('User/User_Profile/'.$data['user_id']);  
		}elseif($data['password'] != $data['confirm_password']){
			$sdata = array();
			$sdata['pmsg'] = '<span style="color:orange;"> Invalid !</span>'; 
			$this->session->set_flashdata($sdata);		
			redirect('User/User_Profile/'.$data['user_id']);  
		}
		
		$data['old_password'] = md5($data['old_password']); 		
		$data['password'] = md5($data['password']); 		
		$this->User_model->UpdateUserPasswordById($data);
		
		$sdata = array();
		$sdata['pmsg'] = '<span style="color:green;">Updated !</span>'; 
		$this->session->set_flashdata($sdata);		
		redirect('User/User_Profile/'.$data['user_id']);  
	}
/*********************************************************************************/

}//END OF CONTROLLER... 
?>