<?php
defined('BASEPATH') or exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

class Graphic extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		// isLogin();
		$this->load->model('Dashboard_model', 'dashboard');
	}

	public function getAllData()
	{
		echo json_encode($this->dashboard->getAllGrapchics());
	}

	public function getData($id_graphic)
	{
		echo json_encode($this->dashboard->getGraphics($id_graphic));
	}
}
