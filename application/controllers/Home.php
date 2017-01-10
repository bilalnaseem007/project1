<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$data['content']="home/main";
		$this->load->view('home/template',$data);
	}
}
