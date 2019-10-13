<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == "") {
			redirect('login/login_admin');
		}
		$this->load->model('M_chart');
	}

	public function index()
	{
		$da = $this->M_chart->data_ketua();
		$data['ketua'] = json_encode($da);

		$ta = $this->M_chart->data_wakil();
		$data['wakil'] = json_encode($ta);

		$this->load->view('admin/header');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
	}

	public function diagram_ketua()
	{
		$da = $this->M_chart->data_ketua();
		$data['sa'] = json_encode($da);
		// print_r($data['sa']);
		// die();
		$this->load->view('admin/header');
		$this->load->view('admin/page/diagram_ketua',$data);
		$this->load->view('admin/footer');
	}

	public function diagram_wakil()
	{
		$dt = $this->M_chart->data_wakil();
		$data['sa'] = json_encode($dt);
		$this->load->view('admin/header');
		$this->load->view('admin/page/diagram_wakil', $data);
		$this->load->view('admin/footer');
	}
}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */