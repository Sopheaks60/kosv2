<?php
require_once ("securities.php");
class Units extends Securities{

	public function index(){
			
		$this->checkSession();

		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'units';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['unit_list'] = $this->Item->get_unit($this->input->post('search'));

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('units/list',$data);
		$this->load->view('templates/footer');
	}


	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'units';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('unit_id',$data['id']);

		$data['unit'] = $this->Item->get_unit_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('unit');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('units/form',$data);
		$this->load->view('templates/footer');

	}
	public function save(){

		$this->checkSession();

			$arr_data = array(
				'unit_name'	=>	$this->input->post('unit_name'),
				);

		$id = $this->session->userdata('unit_id');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->Item->save_unit('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->Item->save_unit('1','',$arr_data);
		}
		redirect('units');
	}

	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->Item->delete_unit($id);
		redirect('units');
	}
}
?>
