<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitemap extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="Sitemap";
		$this->load->view("header",$data);
		$this->load->view("sitemap",$data);
		$this->load->view("footer");
	}
}
