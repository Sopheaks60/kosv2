<?php
require_once ("securities.php");
class Suppliers extends Securities{

	public function index(){

		$this->checkSession();
			
		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'suppliers';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['supplier_list'] = $this->Supplier->get_supplier($this->input->post('search'));

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('suppliers/list',$data);
		$this->load->view('templates/footer');
	}

	/*public function tests(){
		//echo $this->input->post('search');
		print_r($this->Supplier->get_supplier($this->input->post('search'),25,2));
	}*/
	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'suppliers';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('supplier_id',$data['id']);

		$data['supplier'] = $this->Supplier->get_supplier_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('supplier');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('suppliers/form',$data);
		$this->load->view('templates/footer');

	}

	public function view(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'suppliers';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('supplier_id',$data['id']);

		$data['supplier'] = $this->Supplier->get_supplier_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('supplier');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('suppliers/view',$data);
		$this->load->view('templates/footer');

	}

	public function save(){

		$this->checkSession();

			$arr_data = array(
				'supplier_company'		=>	$this->input->post('supplier_company'),
				'supplier_contact'		=>	$this->input->post('supplier_contact'),
				'supplier_address'		=>	$this->input->post('supplier_address'),
				'supplier_phone'		=>	$this->input->post('supplier_phone'),
				'supplier_email'		=>	$this->input->post('supplier_email'),
				'supplier_note'			=>	$this->input->post('supplier_note'),
				);

		$id = $this->session->userdata('supplier_id');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->Supplier->save_supplier('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->Supplier->save_supplier('1','',$arr_data);
		}

		redirect('suppliers');
	}

	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->Supplier->delete_supplier($id);
		redirect('suppliers');
	}

}
?>
