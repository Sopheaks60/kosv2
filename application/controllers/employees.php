<?php
require_once ("securities.php");
class Employees extends Securities{

	public function index(){
			
		$this->checkSession();

		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'employees';

		foreach($this->Appconfig->get_config() as $rows){
			if($rows->config_name == 'item_per_page'){
				$data['item_per_page'] = $rows->config_value;
			}	
		}

		$data['emp_list'] = $this->User->get_all();

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('users/employee_list',$data);
		$this->load->view('templates/footer');
	}


	public function edit(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'employees';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('uid',$data['id']);

		$data['emp'] = $this->User->get_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('edit')." ".$this->lang->line('employee');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('users/form',$data);
		$this->load->view('templates/footer');

	}

	public function view(){

		$this->checkSession();

		//$this->Login->get_by_permission(2);
		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'employees';

		// Assign Data Value
		$data['id'] = $this->uri->segment(3);
		$this->session->set_userdata('uid',$data['id']);

		$data['emp'] = $this->User->get_by_id($data['id']);

		// Set title for page loading
		$data['title'] = $this->lang->line('add')." ".$this->lang->line('user');

		//echo $data['id'];
		//var_dump($data['pc_spec']);
		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('users/view',$data);
		$this->load->view('templates/footer');

	}

	public function save(){

		$this->checkSession();

			$arr_data = array(
				'username'	=>	$this->input->post('username'),
				'password'	=>	md5($this->input->post('password')),
				'name'		=>	$this->input->post('name'),
				'phone'		=>	$this->input->post('phone'),
				'email'		=>	$this->input->post('email'),
				'address'	=>	$this->input->post('address'),
				'lang'		=>	$this->input->post('lang'),
				'note'		=>	$this->input->post('note'),
				);

		$id = $this->session->userdata('uid');

		if($id >= 1){
			//$this->Login->get_by_permission(2);
			$this->User->save_user('2',$id,$arr_data);
		}
		else{
			//$this->Login->get_by_permission(1);
			$this->User->save_user('1','',$arr_data);
		}

		redirect('employees');
	}


	public function delete(){

		$this->checkSession();

		//$this->Login->get_by_permission(3);

		$id = $this->uri->segment(3);
		$this->User->delete_user($id);
		redirect('employees');

	}
}
?>
