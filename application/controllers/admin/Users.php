<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('Musers');
		$this->load->library('form_validation');
	}

	public function logout(){
		$this->session->set_userdata('isloggedin', false);
		$this->session->set_userdata('loguserid');
		$this->session->sess_destroy();
		redirect('admin/users/login');
	}

	public function home(){
		if ($this->session->userdata('isloggedin')) {
			$data['udata']=$this->Musers->fetch_data(array('id'=>$this->session->userdata('loguserid')));
			$this->load->view('admin/overview', $data);
		}
		else{
			redirect('admin/users/login');
		}
	}
	public function login(){
		$data=array();
		if($this->session->userdata('success_msg')){
			$data['success_msg']=$this->session->userdata('success_msg');
			$this->session->unset_userdata('success_msg');
		}
		if($this->session->userdata('error_msg')){
			$data['error_msg']=$this->session->userdata['error_msg'];
			$this->session->unset_userdata('error_msg');
		}


		if ($this->input->post('login')) {
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password','Password', 'required');
			$login_data=array(
				'username'=>$this->input->post('username'), 
				'password'=>md5($this->input->post('password'))
			);
			if ($this->form_validation->run()==true) {
				$log=$this->Musers->login($login_data); 			    
				if($log){
					$this->session->set_userdata('isloggedin', true);
					$this->session->set_userdata('loguserid', $log->id);
					redirect('admin/home');
				}else{
					$data['error_msg']='invalid username or password';
				}
			}
		}
		$this->load->view('admin/users/login', $data);
	}
	public function existed_email($str){
		if ($this->Musers->existed_email($str)) {
			$this->form_validation->set_message('existed_email', 'email already exists');
			return false;
		}else{
			return true;
		}
		
	}
	public function register()
	{
		if($this->input->post('submit')){
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_existed_email');
			$this->form_validation->set_rules('password', 'password', 'required');
			$this->form_validation->set_rules('cpassword', 'confirm password', 'required|matches[password]');
		}
		$user_data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'location'=>$this->input->post('location'),
			'password'=>$this->input->post('pass'),
			'gender'=>$this->input->post('gender'),	
			'password'=>md5($this->input->post('password'))
		);
		if($this->form_validation->run()==true){
			$insert=$this->Musers->registeration($user_data);
			if($insert){
				$this->session->set_userdata('success_msg', 'user created successfuly');
				redirect('admin/users/login');
			}
			$data['error_msg']='Some Problem ooccured. Please try again later';
		}
		$data['user']=$user_data;
		$data['title']='User Registration';
		$this->load->view('admin/users/register', $data);
	}
}
