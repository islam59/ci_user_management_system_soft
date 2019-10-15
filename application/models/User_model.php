<?php
	class User_model extends CI_Model{
		
/********************************************************************
*USER LOGIN METHOD... 
*/
	public function userLogin($data){
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where('email',$data['email']);
		$this->db->where('password',md5($data['password']));
		//$this->db->where('access','1');
		$qresult = $this->db->get(); 
		$has  = $qresult->num_rows(); 

		if($has === 1){
			$result = $qresult->row(); 
			return $result; 
		}
	}
/********************************************************************
*ADD USER METHOD...
*/
	public function AddNewUser_model($data) {
		$this->db->insert('tb_user',$data);
	}
/********************************************************************
*GET ALL USER METHOD...
*/
	public function GetAllUser(){
		$this->db->select('*');
		$this->db->from('tb_user');
		$result = $this->db->get();
		$result = $result->result();
		return $result;
	}
/********************************************************************
*REMOVE USER BY ID...
*/
	public function DeletUserByUserId($user_id){
			$this->db->where('user_id',$user_id);
			$this->db->delete('tb_user');
	}
/********************************************************************
*GET USER DATA BY ID...
*/	
	public function GetUserDataById($data){
		$this->db->select('*'); 
		$this->db->from('tb_user'); 
		$this->db->where('user_id',$data['user_id']);
		$result = $this->db->get(); 
		$result = $result->row();
		return $result; 
	}
/********************************************************************
*USER PROFILE UPDATE BY ID...
*/	
	public function UpdateUserProfileById($data){
		$this->db->set('username',$data['username']);
		$this->db->set('email',$data['email']);
		$this->db->set('phone',$data['phone']);
		$this->db->set('type',$data['type']);
		$this->db->set('address',$data['address']);
		$this->db->where('user_id',$data['user_id']);
		$this->db->update('tb_user');
	}
/********************************************************************
*USER PASSWORD CHANGED BY USER ID...
*/	
	public function UpdateUserPasswordById($data){
		$this->db->set('password',$data['password']);
		$this->db->where('user_id',$data['user_id']);
		$this->db->where('password',$data['old_password']); 
		$this->db->update('tb_user');
	}
/********************************************************************
*USER LOGIN METHOD...
*/
	public function function_name($id){
			$this->db->set('access','1');
			$this->db->where('user_id',$id);
			$this->db->update('tb_user');
	}


}//end of user model...
?>