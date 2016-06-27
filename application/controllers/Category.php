<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data["title"] ="All Category";
		$data["description"] = "All Category";
		$data["keyword"]	= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function apartment()
	{
		$data["title"] ="Apartment Category";
		$data["description"]	= "Apartment";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function decoration()
	{
		$data["title"] ="Decoration Category";
		$data["description"]	= "Decoration";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function design()
	{
		$data["title"] ="Design Category";
		$data["description"]	= "Design";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function development()
	{
		$data["title"] ="Development Category";
		$data["description"]	= "Development";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function home()
	{
		$data["title"] ="Home Category";
		$data["description"]	= "Home";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}

	public function land()
	{
		$data["title"] ="Land Category";
		$data["description"]	= "Land";
		$data["keyword"]		= "";
		$data["sidebar"]	= $this->load->view("sidebar",$data,TRUE);
		$this->load->view("header",$data);
		$this->load->view("category",$data);
		$this->load->view("footer");
	}
}
