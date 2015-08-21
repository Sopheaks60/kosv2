<?php
require_once ("securities.php");
class Settings extends Securities{

	public function index(){
			
		$this->checkSession();

		//$this->Login->get_by_permission(19);

		// Set Menu
		$datas['menu'] = $this->User->getMenu();
		$datas['active_menu'] = 'settings';

		//$data['config_list'] = $this->Appconfig->get_config();
		foreach($this->Appconfig->get_config() as $rows){
			$data[$rows->config_name] = $rows->config_name;	
			$data[$rows->config_name.'_val'] = $rows->config_value;	
		}

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('setting',$data);
		$this->load->view('templates/footer');
	}

	public function save(){

		$this->checkSession();

		$this->Appconfig->update_appconfig('item_per_page',$this->input->post('item_per_page'));
		$this->Appconfig->update_appconfig('shop_name',$this->input->post('shop_name'));
		$this->Appconfig->update_appconfig('shop_contact',$this->input->post('shop_contact'));
		$this->Appconfig->update_appconfig('shop_address',$this->input->post('shop_address'));

		redirect('settings', 'location', 301);
	}

}
?>
