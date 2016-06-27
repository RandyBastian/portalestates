<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="ABOUT US";
		$this->load->view("header",$data);
		$this->load->view("about",$data);
		$this->load->view("footer");
	}
}
