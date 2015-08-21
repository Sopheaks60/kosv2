<?php
require_once ("securities.php");
class Categories extends Securities{

	public function index(){
		
		$this->checkSession();
	
		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'categories';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['category_list'] = $this->Item->get_category($this->input->post('search'));


		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('categories/list',$data);
		$this->load->view('templates/footer');
	}

	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'categories';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('category_id',$data['id']);

		$data['category'] = $this->Item->get_category_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('category');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('categories/form',$data);
		$this->load->view('templates/footer');

	}
	public function save(){

		$this->checkSession();

		$arr_data = array(
				'category_name'	=>	$this->input->post('category_name'),
				);

		$id = $this->session->userdata('category_id');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->Item->save_category('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->Item->save_category('1','',$arr_data);
		}

		redirect('categories');
	}
	
	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->Item->delete_category($id);
		redirect('categories');
	}
}
?>
