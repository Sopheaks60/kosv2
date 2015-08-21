<?php
require_once ("securities.php");
class Homes extends Securities{

	public function index(){
		 
		$this->checkSession();

		//$this->Login->get_by_permission(19);
		$datas['active_menu'] = '';

		// Set Menu
		$datas['menu'] = $this->User->getMenu();

		// Call view
		$this->load->view('templates/header');
		$this->load->view('templates/menu',$datas);
		$this->load->view('home');
		$this->load->view('templates/footer');
	}


}
?>
