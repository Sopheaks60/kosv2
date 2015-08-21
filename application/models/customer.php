<?php
class Customer extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_customer_by_id($id = '')
	{
		$this->db->where('customer_id =', $id);
		$query = $this->db->get('kosv2_customer');
		return $query->result();
	}
	function get_count_customer()
	{
		return $this->db->count_all('kosv2_customer');
	}
	function get_customer($search='')
	{
		$query = '';

		if($search == '' || $search == null){
			$query = $this->db->get('kosv2_customer');
		}else{
			$this->db->like("customer_name",$search);
			$this->db->or_like("customer_company",$search);
			$this->db->or_like("customer_address",$search);
			$this->db->or_like("customer_phone",$search);
			$this->db->or_like("customer_email",$search);
			$query = $this->db->get('kosv2_customer');
		}

		return $query->result();

	}

	function save_customer($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_customer', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('customer_id', $id);
			$this->db->update('kosv2_customer', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}
	function delete_customer($id = '')
	{
		$this->db->where('customer_id =', $id);
		$this->db->delete('kosv2_customer'); 
	}
}
?>
