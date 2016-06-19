<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Category";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}
}
