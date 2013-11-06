<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class user extends CI_Controller{
		var $errors = null;
		var $warnings = null;
		var $notes = null;
		 public function __construct() {
            parent::__construct();
            $this->load->model('model_users');
       }

		public function index(){
			$this->check_point();
		}
		
		// request views
		public function login(){	// login view
			if($this->session->userdata('is_logged_in'))
				redirect('user/profile');	
			$this->render('login');
		}
		
		public function create_account(){	// create account view
			if($this->session->userdata('is_logged_in'))
				redirect('user/profile');
			$this->render('create_account');
		}
		
		public function logout(){	// logout view
				// check point will redirect automatically to login
			$this->check_point(); 				
				// if logout fails it will go back to explore
			redirect('explore'); 				
		}
		
		public function explore(){	// explore view
			$this->check_point();

		}
		
		public function profile(){	// profile view
			$this->check_point();
			$this->render('profile',array('username'=>$this->model_users->get_user_field($this->session->userdata('user_id'),'username')));
		}
		
		public function settings(){	// settings view
		
		}
		// request handlers
		public function handler_login(){
			$this->form_validation->set_rules('username_or_email','Username or Email','trim|required|xss_clean');
			$this->form_validation->set_rules('password','Password','required|xss_clean');
			if($this->form_validation->run() == true){
				// if validation runs, check user credentials
				$id = $this->model_users->can_login();
				if($id!=0){// establish session for user
					$this->session_establish($id);
				}else{
					$this->errors = "Login Failed, please check your Username/Email and Password";
					$this->login();
				}
				
			}else{// if validation fails notify user with mistakes
				$this->warnings = ' ';
				$this->check_point();
			} 
		}
		
		public function handler_logout(){
			$this->session_destroy();
			$this->logout();
		}
		
		public function handler_create_account(){
			// set validation rules
			$this->form_validation->set_rules('username','Username','trim|required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('email','Email','trim|required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('password','Password','required|min_length[5]|max_length[12]|xss_clean');
			
			// run validation
			if($this->form_validation->run() == true){
				// if validation runs, pack data
				$username = $this->input->post('username');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$data = array(
					'username' 	=> $username,
					'email' 	=> $email,
					'password' 	=> $password
					);
				// store user in database
				$id = $this->model_users->create_user($data);

				// establish session for user
				$this->session_establish($id);
			}else{// if validation fails notify user with mistakes
				$this->warnings = "Account Creation Failed";
				$this->check_point();
			} 
				

		}
		
		public function handler_save_settings(){
		
		}
		
		// session handlers
		private function session_establish($uid){
			$data = array(
				'is_logged_in' => true,
				'user_id' => $uid
			);
			$this->session->set_userdata($data);
			redirect('user/profile');
		}
		
		private function session_destroy(){
			$this->session->sess_destroy();
		}
		
		private function session_refresh(){
			$id = $this->session->userdata('user_id');
			$this->session_destroy();
			$this->session_establish($id);
		}
		
		// template rendering
		private function render($view,$data=NULL){
			if($this->errors != NULL){
				$data['errors'] = $this->errors;
				$this->load->view('v_templates/errors',$data);
			}
			if($this->warnings != NULL){
				$data['warnings'] = $this->warnings;
				$this->load->view('v_templates/warnings',$data);
			}
			if($this->notes != NULL)
			$this->load->view('v_templates/notes',$this->notes);
			$this->load->view('v_users/'.$view,$data);
			
			$this->errors = NULL;
			$this->warnings = NULL;
			$this->notes = NULL;
		}
		
		// helpers
		private function check_point(){
			if(!$this->session->userdata('is_logged_in') == true){
				$this->login();
			}
		}
	}
?>