<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Disclaimer extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Disclaimer";
		$this->load->view("header",$data);
		$this->load->view("disclaimer",$data);
		$this->load->view("footer");
	}
}
