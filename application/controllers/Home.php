<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		if($post=$this->input->post()){
			$this->load->database();
		$this->db->select("*");
    $this->db->from('users');
    $result = $this->db->get()->result_array();
    echo (json_encode($result));

		}
		$this->load->view('login');

		
	}
	public function signup(){
		$this->load->view('signup');
	}
}
