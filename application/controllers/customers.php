<?php
require_once ("securities.php");
class Customers extends Securities{

	public function index(){
			
		$this->checkSession();

		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'customers';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['customer_list'] = $this->Customer->get_customer($this->input->post('search'));

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('customers/list',$data);
		$this->load->view('templates/footer');
	}


	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'customers';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('customer_id',$data['id']);

		$data['customer'] = $this->Customer->get_customer_by_id($data['id']);



		$data['ctype']['retail'] = $this->lang->line('retail');
		$data['ctype']['wholesale'] = $this->lang->line('wholesale');
		$data['ctype']['depo'] = $this->lang->line('depo');

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('customer');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('customers/form',$data);
		$this->load->view('templates/footer');

	}
	public function view(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'customers';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('customer_id',$data['id']);

		$data['customer'] = $this->Customer->get_customer_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('customer');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('customers/view',$data);
		$this->load->view('templates/footer');

	}

	public function save(){

		$this->checkSession();

			$arr_data = array(
				'customer_company'		=>	$this->input->post('customer_company'),
				'customer_name'			=>	$this->input->post('customer_name'),
				'customer_type'			=>	$this->input->post('customer_type'),
				'customer_address'		=>	$this->input->post('customer_address'),
				'customer_phone'		=>	$this->input->post('customer_phone'),
				'customer_email'		=>	$this->input->post('customer_email'),
				'customer_note'			=>	$this->input->post('customer_note'),
				);

		$id = $this->session->userdata('customer_id');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->Customer->save_customer('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->Customer->save_customer('1','',$arr_data);
		}

		redirect('customers');
	}
	
	/*
	Gives search suggestions based on what is being searched for
	*/
	function suggest()
	{
		$suggestions = $this->Customer->get_search_suggestions($this->input->get('term'),25);
		//$suggestions = array('label' => $this->input->get('term'),25);
		echo json_encode($suggestions);
		//print_r($suggestions);
		//echo $this->input->get('term');
	}


	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->Customer->delete_customer($id);
		redirect('customers');

	}
}
?>
