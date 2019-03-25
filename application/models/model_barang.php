<?php
	/**
	 * 
	 */
	class model_barang extends CI_Model
	{
		
		function tampil_data()
		{
			$query = "SELECT b.id_barang, b.nama_barang, b.harga, b.harga_ppn, kb.nama_kategori, sb.nama_satuan
						FROM barang as b,kategori_barang as kb, satuan_barang as sb
						WHERE b.id_kategori=kb.id_kategori AND b.id_satuan=sb.id_satuan";
			return $this->db->query($query);
		}

		function tambah_data()
		{
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama_barang');
			$satuan 	= $this->input->post('satuan');
			$kategori 	= $this->input->post('kategori');
			$harga 		= $this->input->post('harga');
			$harga_ppn	= $this->input->post('harga_ppn');
			$data = array('nama_barang'=>$nama,'id_satuan'=>$satuan, 'id_kategori'=>$kategori, 'harga'=>$harga, 'harga_ppn'=>$harga_ppn);
			$this->db->insert('barang',$data);
		}

		function ubah_data()
		{
			$id 		= $this->input->post('id');
			$nama 		= $this->input->post('nama_barang');
			$satuan 	= $this->input->post('satuan');
			$kategori 	= $this->input->post('kategori');
			$harga 		= $this->input->post('harga');
			$harga_ppn	= $this->input->post('harga_ppn');
			$data = array('nama_barang'=>$nama,'id_satuan'=>$satuan, 'id_kategori'=>$kategori, 'harga'=>$harga, 'harga_ppn'=>$harga_ppn);
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