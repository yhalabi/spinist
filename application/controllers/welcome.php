<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$data = array('time' =>$this->benchmark->elapsed_time());
		$this->load->view('welcome_message',$data);
	}
}