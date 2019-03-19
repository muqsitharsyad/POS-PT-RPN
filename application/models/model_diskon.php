<?php
	/**
	 * 
	 */
	class Model_diskon extends CI_Model
	{
		
		function tampil_data()
		{
			return $this->db->get('diskon');
		}

		function tambah_data()
		{
			$id = $this->input->post('id_diskon');
			$kode = $this->input->post('kode_diskon');
			$nama = $this->input->post('nama_diskon');
			$rate = $this->input->post('rate_diskon');
			$data = array('kode_diskon'=> $kode, 'nama_diskon'=> $nama, 'rate_diskon'=> $rate);
			$this->db->insert('diskon',$data);
		}

		function ubah_data()
		{
			$id = $this->input->post('id_diskon');
			$kode = $this->input->post('kode_diskon');
			$nama = $this->input->post('nama_diskon');
			$rate = $this->input->post('rate_diskon');
			$data = array('kode_diskon'=> $kode, 'nama_diskon'=> $nama, 'rate_diskon'=> $rate);
			$this->db->where('id_diskon',$this->input->post('id'));
			$this->db->update('diskon',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_diskon', $id);
			$this->db->delete('diskon');
		}

		function get_one($id)
		{
			$param = array('id_diskon'=>$id);
			return $this->db->get_where('diskon',$param);
		}
	}
?>