<?php 
	class model_users extends CI_Model{
		function can_login(){
			$this->db->select('id')->from('users')->where('email',$this->input->post('username_or_email'));
			$query = $this->db->get();
			$query = $query->result();
			if(!count($query) == 1){
				$this->db->select('id')->from('users')->where('username',$this->input->post('username_or_email'));
				$query = $this->db->get();
				$query = $query->result();
				if(!count($query) == 1){
					return 0;
				}else{
					return $query[0]->id;
				}
			}else
				return $query[0]->id;
		}
		
		public function create_user($data){
			$id = $this->random_id();
			$data['id'] = $id;
			$this->db->insert('users', $data);
			return $id;
		}
		
		public function get_user_field($uid,$field){
			$this->db->select($field)->from('users')->where('id',$uid);
			$query = $this->db->get();
			$query = $query->result();
			if(count($query) == 1)
				return $query[0]->$field;
			return -1;
		}

		function update_user($data){
		
		}
		
		function is_unique_username($username){
		
		}
		
		function is_unique_email($email){
		
		}

		private function random_id(){
			$id = $this->random_num();
			if(!$this->is_unique_id($id)){
				$this->random_id();
			}else{
				return $id;
			}
		}
		
		private function random_num(){
			return mt_rand(1,100000000);
		}
		
		private function is_unique_id($id){
			$this->db->select('')->from('users')->where('id',$id);
			$query = $this->db->get();
			$query = $query->result();
			if(count($query)>0){
				return false;
			}else{
				return true;
			}
		}
	}
?>