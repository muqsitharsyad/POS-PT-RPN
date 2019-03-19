<?php
	/**
	 * 
	 */
	class Model_kostumer extends CI_Model
	{
		
		function tampil_data()
		{
			return $this->db->get('kostumer');
		}

		function tambah_data()
		{
			$id = $this->input->post('id_kostumer');
			$nama = $this->input->post('nama_kostumer');
			$kontak = $this->input->post('kontak');
			$alamat = $this->input->post('alamat');
			$kpos = $this->input->post('kode_pos');
			$data = array('nama_kostumer'=> $nama, 'kontak'=> $kontak, 'alamat'=> $alamat, 'kode_pos'=>$kpos);
			$this->db->insert('kostumer',$data);
		}

		function ubah_data()
		{
			$id = $this->input->post('id_kostumer');
			$nama = $this->input->post('nama_kostumer');
			$kontak = $this->input->post('kontak');
			$alamat = $this->input->post('alamat');
			$kpos = $this->input->post('kode_pos');
			$data = array('nama_kostumer'=> $nama, 'kontak'=> $kontak, 'alamat'=> $alamat, 'kode_pos'=>$kpos);
			$this->db->where('id_kostumer',$this->input->post('id'));
			$this->db->update('kostumer',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_kostumer', $id);
			$this->db->delete('kostumer');
		}

		function get_one($id)
		{
			$param = array('id_kostumer'=>$id);
			return $this->db->get_where('kostumer',$param);
		}
	}
?>