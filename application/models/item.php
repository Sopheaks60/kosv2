<?php
class Item extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	//*********************** Item ******************************// 
	function get_item($search='')
	{

		$query = '';
		if($search == '' || $search == null){

			$this->db->select('*');
			$this->db->from('kosv2_item');
			$this->db->join('kosv2_category','kosv2_item.category_id = kosv2_category.category_id');
			$this->db->join('kosv2_unit','kosv2_item.unit_id = kosv2_unit.unit_id');
			$this->db->join('kosv2_supplier','kosv2_item.supplier_id = kosv2_supplier.supplier_id');
			$query = $this->db->get();

		}else{

			$this->db->select('*');
			$this->db->from('kosv2_item');
			$this->db->join('kosv2_category','kosv2_item.category_id = kosv2_category.category_id');
			$this->db->join('kosv2_unit','kosv2_item.unit_id = kosv2_unit.unit_id');
			$this->db->join('kosv2_supplier','kosv2_item.supplier_id = kosv2_supplier.supplier_id');	
			$this->db->where("item_code",$search);
			$this->db->or_where("item_name",$search);
			$query = $this->db->get();

		}

		return $query->result();

	}
	/*
	Get Item ID
	*/
	function get_item_search_id($search)
	{
		$suggestions = array();
		
		$this->db->from('kosv2_item');	
		$this->db->where("item_code",$search);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$item_id = $row->item_id;		
		}

		$this->db->from('kosv2_item');	
		$this->db->where("item_name",$search);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$item_id = $row->item_id;		
		}

		return $item_id;
	
	}

	function get_existing_item($code,$name)
	{
		$this->db->where('item_code = ',$code);
		$this->db->or_where('item_name = ',$name);
		//$query = $this->db->get('kosv2_item');

		return $this->db->count_all_results('kosv2_item');
	}

	function get_all()
	{
		$this->db->select('*');
		$this->db->from('kosv2_item');
		$this->db->join('kosv2_category','kosv2_item.category_id = kosv2_category.category_id');
		$this->db->join('kosv2_unit','kosv2_item.unit_id = kosv2_unit.unit_id');
		$query = $this->db->get();

		return $query->result();
	}

	function get_item_by_id($id = '')
	{
		$this->db->where('item_id =', $id);
		$query = $this->db->get('kosv2_item');
		return $query->result();
	}

	function get_id($str = ''){
		$this->db->select('item_id');
		$this->db->where('item_name = ',$str);
		$this->db->or_where('item_code = ',$str);
		$query = $this->db->get('kosv2_item');
		return $query->result();
	}
	function save_item($saved = '',$id = '' ,$arr_data = '')
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

	function get_count_item()
	{
		return $this->db->count_all('kosv2_item');
	}

	function delete_item($id = '')
	{
		$this->db->where('item_id =', $id);
		$this->db->delete('kosv2_item'); 
	}

	//*********************** Category ******************************// 
	function get_category_by_id($id = '')
	{
		$this->db->where('category_id =', $id);
		$query = $this->db->get('kosv2_category');
		return $query->result();
	}
	function get_dropdown_category()
	{
		$this->db->select('category_id,category_name');
		$this->db->from('kosv2_category');	
		$query = $this->db->get();

		return $query->result();
	}
	function get_count_category()
	{
		return $this->db->count_all('kosv2_category');
	}
	function get_category($search='')
	{
		$query = '';
		if($search == '' || $search == null){
			$query = $this->db->get('kosv2_category');
		}else{
			$this->db->from('kosv2_category');
			$this->db->like("category_name",$search,'after');
			$query = $this->db->get();
		}
		return $query->result();
	}
	/*
	Get search suggestions to find suppliers
	*/
	function get_category_search_suggestions($search,$limit=25)
	{
		$suggestions = array();
		
		$this->db->from('kosv2_unit');	
		$this->db->like("unit_name",$search,'after');
		$this->db->limit($limit);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$suggestions[]=array('label' => $row->unit_name);		
		}

		return $suggestions;
	
	}
	function save_category($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_category', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('category_id', $id);
			$this->db->update('kosv2_category', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}
	function delete_category($id = '')
	{
		$this->db->where('category_id =', $id);
		$this->db->delete('kosv2_category'); 
	}

	//*********************** Unit ******************************// 
	function get_unit_by_id($id = '')
	{
		$this->db->where('unit_id =', $id);
		$query = $this->db->get('kosv2_unit');
		return $query->result();
	}
	function get_dropdown_unit()
	{
		$this->db->select('unit_id,unit_name');
		$this->db->from('kosv2_unit');
		$query = $this->db->get();

		return $query->result();
	}
	function get_count_unit()
	{
		return $this->db->count_all('kosv2_unit');
	}
	function get_unit($search='')
	{
		$query = '';
		if($search == '' || $search == null){
			$query = $this->db->get('kosv2_unit');
		}else{
			$this->db->from('kosv2_unit');	
			$this->db->like("unit_name",$search,'after');
			$query = $this->db->get();
		}
		return $query->result();
	}

	function save_unit($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_unit', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('unit_id', $id);
			$this->db->update('kosv2_unit', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}
	function delete_unit($id = '')
	{
		$this->db->where('unit_id =', $id);
		$this->db->delete('kosv2_unit'); 
	}
}
?>
