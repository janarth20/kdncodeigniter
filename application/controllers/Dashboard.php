<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//check if the user logged in all function in this file. this to avoid to have the below function in all function in this file
		if (!$this->ion_auth->logged_in())
		{
			redirect('auth/login');
		}
	}

	public function index()
	{
		
		//declare empty array
		$data=array();

		//declare data array
		$data['content']='democontent';
		$this->load->view('templates/backend',$data);
	}

	public function about()
	{
		//declare empty array
		$data=array();

		//declare data array
		$data['content']='about';
		$this->load->view('templates/backend',$data);
	}
}
