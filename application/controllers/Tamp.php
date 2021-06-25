<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tamp extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Lok_Model');
	}
	public function index()
	{
		$this->load->view('template/head');
		$this->load->view('index');
		$this->load->view('template/foot');
	}
	public function map2()
	{
		$data['data'] = $this->Lok_Model->getloc();
		$this->load->view('template/head');
		$this->load->view('index');
		$this->load->view('template/foot2', $data);
	}
}
