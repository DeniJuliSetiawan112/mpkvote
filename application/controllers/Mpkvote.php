<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mpkvote extends CI_Controller {
	function __construct()
	{
		parent::__construct();
		// if($this->session->userdata('id_user')==null){
		// 	redirect(site_url('Login'));
		// }
		$this->load->model('M_user');
		$this->load->model('M_pemilihan');
		$this->load->model('M_calon');
	}

	public function index()
	{
		if($this->session->userdata('id_user')){
			$id = $this->session->userdata('id_user');
			$data['data_diri'] = $this->M_user->get_user($id);
			$this->load->view('user/data_diri',$data);
		}
		else{
			redirect('Login');
		}
	
	}

	// public function ulasan()
	// {	
	// 	$table = "penilaian";
	// 	$id = $this->session->userdata('id_user');
	// 	$valid_user = $this->M_user->cek_field($table,$id);
	// 	if ($valid_user == true) {
	// 		redirect('devote/pemilihan');
	// 	} else {
	// 	$where = array(
	// 		"jenis_calon" => 'OSIS'
	// 	);
	// 	$data['osis'] = $this->M_user->get_where('calon',$where);
	// 	$this->load->view('user/ulasan',$data);
	// }
	// }

	public function pilih_ketua()
	{
		$table = "pemilihan";
		$id = $this->session->userdata('id_user');
		$where = array(
			'id_user'	=> $id,
			'jenis_calon'=>'KETUA'
		);
		$valid_user = $this->M_user->cek_field($table,$where);
		if ($valid_user == true) {
			redirect('mpkvote/pilih_wakil');
		} else {
			$where = array(
				"jenis_calon" => 'KETUA'
			);
			$data['calon'] = $this->M_user->get_where_calon("calon",$where);
			$this->load->view('user/ketua',$data);
			$id_user = $this->session->userdata('id_user');
		}
	}
	public function pilih_wakil()
	{
		$table = "pemilihan";
		$id = $this->session->userdata('id_user');
		$where = array(
			'id_user'	=> $id,
			'jenis_calon'=>'WAKIL'
		);
		$valid_user = $this->M_user->cek_field($table,$where);
		if ($valid_user == true) {
			redirect('mpkvote/aspirasi');
		} else {
			$where = array(
				"jenis_calon" => 'WAKIL'
			);
			$data['calon'] = $this->M_user->get_where_calon("calon",$where);
			$this->load->view('user/wakil',$data);
			$id_user = $this->session->userdata('id_user');
		}
	}

	public function aspirasi()
	{
		$table = "aspirasi";
		$id = $this->session->userdata('id_user');
		$valid_user = $this->M_user->cek_field($table,$id);
		if ($valid_user == true) {
			redirect('Login/logout');
		}else{
			$where = array(
				"jenis_calon" => 'OSIS'
			);
			$data['aspirasi'] = $this->M_user->get_data('aspirasi','aspirasi.waktu');
			$this->load->view('user/aspirasi',$data);
		}
	}
	function input_aspirasi(){
		$id = $this->session->userdata('id_user');
		$data = array(
				"id_user" => $id,
				"isi"	  => $this->input->post('isi')
		);
		$this->M_user->input('aspirasi',$data);
		$output = array('error' => false );
		echo json_encode($output);
	}
	public function proses_pilih_ketua($id)
	{
		$id_calon = $id;
		$id_user = $this->session->userdata('id_user');
		$data = array(
				'id_calon' => $id_calon,
				'id_user'  => $id_user,
				'jenis_calon'=>'KETUA'
		);
		$this->M_pemilihan->input($data);
		redirect('/mpkvote/pilih_wakil');
	}
	public function proses_pilih_wakil($id)
	{
		$id_calon = $id;
		$id_user = $this->session->userdata('id_user');
		$data = array(
				'id_calon' => $id_calon,
				'id_user'  => $id_user,
				'jenis_calon'=>'WAKIL'
		);
		$this->M_pemilihan->input($data);
		redirect('/mpkvote/aspirasi');
	}
}
