<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Login";
		$data["sidebar"] = $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("login",$data);
		$this->load->view("footer");
	}
}
