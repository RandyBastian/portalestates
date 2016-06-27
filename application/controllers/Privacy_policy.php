<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy_policy extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Privacy Policy";
		$this->load->view("header",$data);
		$this->load->view("privacy_policy",$data);
		$this->load->view("footer");
	}
}
