<?php
class Item_kit extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//*********************** Item ******************************// 
	function get_item_kit($search='',$limit=0,$start=0)
	{
		$query = '';
		if($search == '' || $search == null){
			$this->db->limit($limit, $start);
			$this->db->select('*');
			$this->db->from('kosv2_item_kit');
			$this->db->join('kosv2_category','kosv2_item_kit.category_id = kosv2_category.category_id');
			$this->db->join('kosv2_unit','kosv2_item_kit.unit_id = kosv2_unit.unit_id');
			$this->db->join('kosv2_supplier','kosv2_item_kit.supplier_id = kosv2_supplier.supplier_id');
			$query = $this->db->get();
		}else{
			$this->db->limit($limit, $start);
			$this->db->select('*');
			$this->db->from('kosv2_item_kit');
			$this->db->join('kosv2_category','kosv2_item_kit.category_id = kosv2_category.category_id');
			$this->db->join('kosv2_unit','kosv2_item_kit.unit_id = kosv2_unit.unit_id');
			$this->db->join('kosv2_supplier','kosv2_item_kit.supplier_id = kosv2_supplier.supplier_id');	
			$this->db->where("item_kit_code",$search);
			$this->db->or_where("kosv2_item_kit.item_kit_name",$search);
			$query = $this->db->get();
		}
		return $query->result();
	}

	function get_existing_item($code,$name)
	{
		$this->db->where('item_kit_code = ',$code);
		$this->db->or_where('item_kit_name = ',$name);

		return $this->db->count_all_results('kosv2_item_kit');
	}

	function get_item_kit_by_id($id = '')
	{

		$this->db->join('kosv2_category','kosv2_item_kit.category_id = kosv2_category.category_id');
		$this->db->join('kosv2_unit','kosv2_item_kit.unit_id = kosv2_unit.unit_id');
		$this->db->join('kosv2_supplier','kosv2_item_kit.supplier_id = kosv2_supplier.supplier_id');	
		$this->db->join('kosv2_item_kit_item','kosv2_item_kit.item_kit_id = kosv2_item_kit_item.item_kit_id');
		$this->db->join('kosv2_item','kosv2_item_kit_item.item_id = kosv2_item.item_id');
		$this->db->where('kosv2_item_kit.item_kit_id =', $id);
		$query = $this->db->get('kosv2_item_kit');
		return $query->result();
	}

	/*
	Get search suggestions to find suppliers
	*/
	function get_item_kit_search_suggestions($search,$limit=25)
	{
		$suggestions = array();
		
		$this->db->from('kosv2_item_kit');	
		$this->db->like("item_kit_code",$search,'after');
		$this->db->limit($limit);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$suggestions[]=array('label' => $row->item_kit_code);		
		}

		$this->db->from('kosv2_item_kit');	
		$this->db->like("item_kit_name",$search,'after');
		$this->db->limit($limit);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$suggestions[]=array('label' => $row->item_kit_name);		
		}

		return $suggestions;
	
	}

	function get_id($str = ''){
		$this->db->select('item_kit_id');
		$this->db->where('item_kit_name = ',$str);
		$this->db->or_where('item_kit_code = ',$str);
		$query = $this->db->get('kosv2_item_kit');
		return $query->result();
	}

	function save_item_kit_items($saved = '',$uid = '',$item_id = '',$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_item_kit_item', $arr_data); 			
		}
		else if($saved == '2'){

			$this->db->where('user_id', $uid);
			$this->db->where('item_id', $item_id);
			$this->db->update('kosv2_item_kit_item', $arr_data); 
		}
	}

	function get_item_kit_item($item_id = 0,$user_id = 0){
		$this->db->select('item_kit_id');
		$this->db->where('item_id = ',$item_id);
		$this->db->where('user_id = ',$user_id);
		$query = $this->db->get('kosv2_item_kit_item');

		return $query->num_rows();
	}

	function get_all_item_kit_item($user_id = 0){
		//$this->db->select('*');
		$this->db->from('kosv2_item_kit_item');
		$this->db->join('kosv2_item','kosv2_item.item_id = kosv2_item_kit_item.item_id');
		$this->db->join('kosv2_unit','kosv2_item.unit_id = kosv2_unit.unit_id');
		$this->db->where('kosv2_item_kit_item.user_id = ',$user_id);
		$query = $this->db->get();

		return $query->result();
	}

	function get_item_kit_item_qty($item_id = 0,$user_id = 0){
		$this->db->select('qty');
		$this->db->where('item_id = ',$item_id);
		$this->db->where('user_id = ',$user_id);
		$query = $this->db->get('kosv2_item_kit_item');
		$result = $query->row();
		return $result->qty;
	}



	/*function save_item($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_item', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('item_id', $id);
			$this->db->update('kosv2_item', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}

	function get_count_item_kit()
	{
		return $this->db->count_all('kosv2_item_kit');
	}

	function delete_item($id = '')
	{
		$this->db->where('item_id =', $id);
		$this->db->delete('kosv2_item'); 
	}*/

}
?>
