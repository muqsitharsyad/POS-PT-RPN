<?php
	/**
	 * 
	 */
	class Model_kategori extends CI_Model
	{
		
		function tampil_data()
		{
			return $this->db->get('kategori_barang');
		}

		function tambah_data()
		{
			$data = array('nama_kategori'=> $this->input->post('kategori'));
			$this->db->insert('kategori_barang',$data);
		}

		function ubah_data()
		{
			$data = array('nama_kategori'=> $this->input->post('kategori'));
			$this->db->where('id_kategori', $this->input->post('id'));
			$this->db->update('kategori_barang',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_kategori', $id);
			$this->db->delete('kategori_barang');
		}

		function get_one($id)
		{
			$param = array('id_kategori'=>$id);
			return $this->db->get_where('kategori_barang',$param);
		}
	}
?>