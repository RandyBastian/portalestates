<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] 			="Redirect Article";
		$data["countdown"] 		= "true";
		$data["sidebar"]		= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("redirect",$data);
		$this->load->view("footer");
	}
}
