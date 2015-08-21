<?php
class Logins extends CI_Controller{

	public function __construct()
	{
		parent::__construct();
            	// Load Model and Helper
		$this->load->model('User', '', TRUE);
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('session');
		$this->lang->load('login', 'khmer');
		//$this->load->model('Login', '', TRUE);
	}

	public function index(){
		$sessions = $this->User->getUserSession($this->session->userdata('session_id'));
		if($sessions == true){
			redirect('homes');
		}
		$data['username'] = $this->session->userdata('user_id');
		$data['msg'] = $this->lang->line('msg_confirm');
		// Call view
		if($data['username'] == null || $data['username'] == 0){
			$this->load->view('login',$data);
		}else{
			redirect('homes');
		}
	}
	public function login(){
		$user	=	$this->input->post('username');
		$pwd	=	$this->input->post('password');
		if($this->User->logins($user,$pwd) == 0){
			$this->session->sess_destroy();
			$data['msg'] = $this->lang->line('msg_confirm');
			// Call view
			$this->load->view('login',$data);
		}
		else{
			$arr = $this->User->logins($user,$pwd);
			$this->session->set_userdata('user_id',$arr['user_id']);
			$this->session->set_userdata('username',$arr['name']);
			$this->session->set_userdata('lang',$arr['lang']);
			redirect('homes');
		}
	}
	public function logout(){	
		$this->session->sess_destroy();
		redirect('logins');
	}

}
?>
