<?php
class Securities extends CI_Controller{

	public function __construct()
	{
		parent::__construct();

            	// Load Mode and Helper
		$this->load->model('Appconfig');
		$this->load->model('Customer');
		$this->load->model('Item');
		$this->load->model('Item_kit');
		$this->load->model('Supplier');
		$this->load->model('User');

		// Load Helper
		$this->load->helper('url');
		$this->load->helper('form');
		// Load Library
		$this->load->library('session');
		$this->load->library('pagination');

		// Load Language
		$this->lang->load('item', 'khmer');
		$this->lang->load('category', 'khmer');
		$this->lang->load('customer', 'khmer');
		$this->lang->load('unit', 'khmer');
		$this->lang->load('supplier', 'khmer');
		$this->lang->load('common', 'khmer');
		$this->lang->load('module', 'khmer');
		$this->lang->load('setting', 'khmer');
		$this->lang->load('user', 'khmer');
		$this->lang->load('login', 'khmer');
	}

	public function checkSession(){
		$sessions = $this->User->getUserSession($this->session->userdata('session_id'));
		if($sessions == false){
			redirect('logins');
		}
	}

}
?>
