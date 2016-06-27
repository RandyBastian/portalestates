<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Search Result";
		$data["sidebar"] = $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("search",$data);
		$this->load->view("footer");
	}
}
