<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
