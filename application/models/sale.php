<?php
class Customer extends CI_Model{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function get_sale_by_id($id = '')
	{
		$this->db->where('sale_id =', $id);
		$query = $this->db->get('kosv2_sale');
		return $query->result();
	}
	function get_count_sale()
	{
		return $this->db->count_all('kosv2_sale');
	}
	function get_customer($search='',$limit=0,$start=0)
	{
		$this->db->select('*');
		$this->db->from('kosv2_sale');
		$this->db->join('kosv2_sale_items','kosv2_sale.sale_id = kosv2_sale_items.sale_id','inner')
		$query = $this->db->get('kosv2_sale');

		return $query->result();

	}

	function save_sale_items($saved = '',$id = '' ,$arr_data = '')
	{
		// Insert Value to Table

		if($saved == '1'){
			$this->db->insert('kosv2_sale_items', $arr_data); 			
		}
		else if($saved == '2'){
			$this->db->where('uid', $id);
			$this->db->update('kosv2_sale_items', $arr_data); 
		}
		else
		{
			echo 'Save Fail';
		}
	}

	//Get search suggestions to find suppliers
	
	/*function get_search_suggestions($search,$limit=25)
	{
		$suggestions = array();
		
		$this->db->from('kosv2_customer');	
		$this->db->like("customer_name",$search,'after');
		$this->db->limit($limit);
		$by = $this->db->get();
		foreach($by->result() as $row)
		{
			$suggestions[]=array('label' => $row->customer_name);		
		}

		$this->db->from('kosv2_customer');
		$this->db->like("customer_company",$search,'after');
		$this->db->limit($limit);
		$company_name = $this->db->get();
		foreach($company_name->result() as $row)
		{
			$suggestions[]=array('label' => $row->customer_company);		
		}
		
		$this->db->from('kosv2_customer');
		$this->db->like("customer_address",$search,'after');
		$this->db->limit($limit);
		$by_company = $this->db->get();
		foreach($by_company->result() as $row)
		{
			$suggestions[]=array('label' => $row->customer_address);		
		}

		$this->db->from('kosv2_customer');
		$this->db->like("customer_phone",$search,'after');
		$this->db->limit($limit);
		$name = $this->db->get();
		foreach($name->result() as $row)
		{
			$suggestions[]=array('label' => $row->customer_phone);		
		}

		$this->db->from('kosv2_customer');
		$this->db->like("customer_email",$search,'after');
		$this->db->limit($limit);
		$by_name = $this->db->get();
		foreach($by_name->result() as $row)
		{
			$suggestions[]=array('label' => $row->customer_email);		
		}

		return $suggestions;
	
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
	}*/
}
?>
