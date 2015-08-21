<?php
require_once ("securities.php");
class Items extends Securities{

	public function index(){

		$this->checkSession();			

		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'items';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['item_list'] = $this->Item->get_item($this->input->post('search'));

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('items/list',$data);
		$this->load->view('templates/footer');
	}

	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'items';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('item_id',$data['id']);

		$data['item'] = $this->Item->get_item_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('item');

		$data['category'] = array();
		$data['supplier'] = array();
		$data['unit'] = array();
		
		foreach($this->Item->get_dropdown_category() as $row1){
			$data['category'][$row1->category_id] = $row1->category_name;
		}

		foreach($this->Item->get_dropdown_unit() as $row2){
			$data['unit'][$row2->unit_id] = $row2->unit_name;
		}		

		foreach($this->Supplier->get_dropdown_supplier() as $row3){
			$data['supplier'][$row3->supplier_id] = $row3->supplier_company;
		}
		
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('items/form',$data);
		$this->load->view('templates/footer');

	}
	public function save(){

		$this->checkSession();

		//echo $this->Item->get_existing_item($this->input->post('item_code'),$this->input->post('item_name'));

			$arr_data = array(
				'item_code'	=>	$this->input->post('item_code'),
				'item_name'	=>	$this->input->post('item_name'),
				'category_id'	=>	$this->input->post('category_id'),
				'supplier_id'	=>	$this->input->post('supplier_id'),
				'item_cost'	=>	$this->input->post('item_cost'),
				'item_price'	=>	$this->input->post('item_price'),
				'item_qty'	=>	$this->input->post('item_qty'),
				'item_reorder'	=>	$this->input->post('item_reorder'),
				'unit_id'	=>	$this->input->post('unit_id'),
				'item_note'	=>	$this->input->post('item_note'),
				);

		$id = $this->session->userdata('item_id');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->Item->save_item('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->Item->save_item('1','',$arr_data);
		}

		redirect('items');
	}
	
	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->Item->delete_item($id);
		redirect('items');
	}
}
?>
