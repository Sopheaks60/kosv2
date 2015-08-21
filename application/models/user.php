<?php
class User extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	// Get all of you item type
	function get_all()
	{
		$this->db->select('*');
		$this->db->from('kosv2_user');
		$query = $this->db->get();

		return $query->result();
	}
	function get_by_id($id = '')
	{
		$this->db->where('uid =', $id);
		$query = $this->db->get('kosv2_user');
		return $query->result();
	}
	function get_id($str = ''){
		$this->db->select('uid');
		$this->db->where('username = ',$str);
		$query = $this->db->get('kosv2_user');
		return $query->result();
	}
	function logins($username='',$password=''){
		$info = $this->getPassword($username);
		foreach($info as $rows){
			if(md5($password) == $rows->password){
				$arr = array(
					'user_id'	=>	$rows->uid,
					'lang'		=>	$rows->lang,
					'name'		=>	$rows->name,
					);
				return $arr;
			}	
			else{
				return 0;
			}
		}
	}
	function getPassword($username=''){
		$this->db->select('uid,password,name,lang');
		$this->db->from('kosv2_user');
		$this->db->where('username =',$username);
		$query = $this->db->get();

		return $query->result();
	}
	function getMenu(){
		$this->db->select('*');
		$this->db->from('kosv2_module');
		$this->db->where('active','1');
		$this->db->order_by('sort', 'DSC');
		$query = $this->db->get();

		return $query->result();
	}
	function getUserSession($session_id = ''){
		$this->db->from('kosv2_sessions');
		$this->db->where('session_id =',$session_id);
		$query = $this->db->get();
		$result = $query->result();

		foreach($result as $rows){
			if($rows->user_data == '' || $rows->user_data == null){
				return false;
			}else{
				return true;
			}
		}

	}
	function save_user($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_user', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('uid', $id);
			$this->db->update('kosv2_user', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}
	function delete_user($id = '')
	{
		$this->db->where('uid =', $id);
		$this->db->delete('kosv2_user'); 
	}
}
?>
