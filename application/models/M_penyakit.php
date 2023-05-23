<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_penyakit extends CI_Model
{
	function __construct()
	{
		parent::__construct();
	}

	function getAll()
	{
		return $this->db->get('penyakit');
	}

	function getDatapenyakit()
	{
		$this->db->select('*');
		$this->db->from('penyakit');
		$query = $this->db->get();
	}

	public function edit($data, $id)
	{
		$this->db->where('id_penyakit', $id);
		$this->db->update('penyakit', $data);
	}

	public function detailEdit($id)
	{
		$this->db->where('id_penyakit', $id);
		$query = $this->db->get('penyakit');
		return $query->row();
	}

	public function delete($id)
	{
		$this->db->where('id_penyakit', $id);
		$this->db->delete('penyakit');
	}

	public function jumlah_penyakit()
	{
		$this->db->select('*');
		$this->db->from('penyakit');
		return $this->db->get()->num_rows();
	}
}
