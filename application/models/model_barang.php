<?php
	/**
	 * 
	 */
	class model_barang extends CI_Model
	{
		
		function tampil_data()
		{
			$query = "SELECT b.id_barang, b.nama_barang, b.harga, kb.nama_kategori
						FROM barang as b,kategori_barang as kb
						WHERE b.id_kategori=kb.id_kategori";
			return $this->db->query($query);
		}

		function tambah_data()
		{
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama_barang');
			$kategori 	= $this->input->post('kategori');
			$harga 		= $this->input->post('harga');
			$data = array('nama_barang'=>$nama, 'id_kategori'=>$kategori, 'harga'=>$harga);
			$this->db->insert('barang',$data);
		}

		function ubah_data()
		{
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama_barang');
			$kategori 	= $this->input->post('kategori');
			$harga 		= $this->input->post('harga');
			$data = array('nama_barang'=>$nama, 'id_kategori'=>$kategori, 'harga'=>$harga);
			$this->db->where('id_barang',$id);
			$this->db->update('barang',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_barang', $id);
			$this->db->delete('barang');
		}

		function get_one($id)
		{
			$param = array('id_barang'=>$id);
			return $this->db->get_where('barang',$param);
		}
	}
?>