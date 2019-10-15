<?php
	class Apps_model extends CI_Model{
	
		public function RoomBooked($data){
			$this->db->set('room_status','Booked');
			$this->db->set('guest_id',$data['guest_id']); 
			$this->db->where('room_no',$data['room_no']);
			$this->db->update('tb_room'); 
		}

	}//end of model.. 
?>