<?php
	/**
	 * 
	 */
	class Model_satuan extends CI_Model
	{
		
		function tampil_data()
		{
			return $this->db->get('satuan_barang');
		}

		function tambah_data()
		{
			$data = array('nama_satuan'=> $this->input->post('satuan'));
			$this->db->insert('satuan_barang',$data);
		}

		function ubah_data()
		{
			$data = array('nama_satuan'=> $this->input->post('satuan'));
			$this->db->where('id_satuan', $this->input->post('id'));
			$this->db->update('satuan_barang',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_satuan', $id);
			$this->db->delete('satuan_barang');
		}

		function get_one($id)
		{
			$param = array('id_satuan'=>$id);
			return $this->db->get_where('satuan_barang',$param);
		}
	}
?>