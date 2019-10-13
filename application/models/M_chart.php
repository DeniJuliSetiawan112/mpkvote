<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_chart extends CI_Model {

	public function data_ketua()
	{
		$data_user = $this->db->get('user')->result();
		$jml_user 	= count($data_user);
		$seluruh_pemilih = $this->db->get('pemilihan')->result();
		$jml_memilih = count($seluruh_pemilih);
		$d_calon = $this->db->select('*')
							->from('calon')
							->where('calon.jenis_calon','KETUA')
							->get()->result();
		$d_pemilih = array();
		$res = array();
		// $sudah_memilih = 0;
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
					->from('calon')
					->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where('pemilihan.id_calon', $d_calon[$i]->id_calon)
					->where('pemilihan.jenis_calon', 'KETUA')
					->get()->result();
			$jml_pemilih = count($pemilih);
			// $sudah_memilih = $sudah_memilih + $jml_pemilih;
			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['label'] = $d_calon[$i]->nama_calon;
			$sat[$i]['y'] = $jml_pemilih;
		}
		$sat[count($d_calon)]['label'] = 'BELUM MEMILIH';
		$sat[count($d_calon)]['y'] = $jml_user - ($jml_memilih/2);
		return $sat;
	}

	public function data_wakil()
	{
		$data_user = $this->db->get('user')->result();
		$jml_user 	= count($data_user);
		$seluruh_pemilih = $this->db->get('pemilihan')->result();
		$jml_memilih = count($seluruh_pemilih);
		$d_calon = $this->db->select('*')
							->from('calon')
							->where('calon.jenis_calon','WAKIL')
							->get()->result();
		$d_pemilih = array();
		$res = array();
		// $sudah_memilih = 0;
		for ($i=0; $i < count($d_calon); $i++) {
			$pemilih = $this->db->select('*')
					->from('calon')
					->join('pemilihan', 'calon.id_calon = pemilihan.id_calon')
					->where('pemilihan.id_calon', $d_calon[$i]->id_calon)
					->get()->result();
			$jml_pemilih = count($pemilih);
			// $sudah_memilih = $sudah_memilih + $jml_pemilih;
			$d_pemilih[$i] = $jml_pemilih;
			$sat[$i]['label'] = $d_calon[$i]->nama_calon;
			$sat[$i]['y'] = $jml_pemilih;
		}
		$sat[count($d_calon)]['label'] = 'BELUM MEMILIH';
		$sat[count($d_calon)]['y'] = $jml_user - ($jml_memilih/2);
		return $sat;
	}	

}

/* End of file M_chart.php */
/* Location: ./application/models/M_chart.php */