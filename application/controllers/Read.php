<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Read extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Read Detail Article";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("detail",$data);
		$this->load->view("footer");
	}

	public function author()
	{
		$data["title"] ="Read Author Article";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("author",$data);
		$this->load->view("footer");
	}
}
