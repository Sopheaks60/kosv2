<?php
class Supplier extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_supplier_by_id($id = '')
	{
		$this->db->where('supplier_id =', $id);
		$query = $this->db->get('kosv2_supplier');
		return $query->result();
	}
	function get_dropdown_supplier()
	{
		$this->db->select('supplier_id,supplier_company');
		$this->db->from('kosv2_supplier');
		$query = $this->db->get();

		return $query->result();
	}
	function get_count_supplier()
	{
		return $this->db->count_all('kosv2_supplier');
	}
	function get_supplier($search='')
	{
		$query = '';
		if($search == '' || $search == null){
			$query = $this->db->get('kosv2_supplier');
		}
		else{
			$this->db->like("supplier_contact",$search);
			$this->db->or_like("supplier_company",$search);
			$this->db->or_like("supplier_address",$search);
			$this->db->or_like("supplier_phone",$search);
			$this->db->or_like("supplier_email",$search);
			$query = $this->db->get('kosv2_supplier');
		}
		return $query->result();
		//echo $search;
	}
	function save_supplier($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_supplier', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('supplier_id', $id);
			$this->db->update('kosv2_supplier', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}

	function delete_supplier($id = '')
	{
		$this->db->where('supplier_id =', $id);
		$this->db->delete('kosv2_supplier'); 
	}
}
?>
