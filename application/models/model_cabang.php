<?php
	/**
	 * 
	 */
	class Model_cabang extends CI_Model
	{
		
		function tampil_data()
		{
			return $this->db->get('cabang_organisasi');
		}

		function tambah_data()
		{
			$data = array('nama_cabang'=> $this->input->post('cabang'));
			$this->db->insert('cabang_organisasi',$data);
		}

		function ubah_data()
		{
			$data = array('nama_cabang'=> $this->input->post('cabang'));
			$this->db->where('id_cabang', $this->input->post('id'));
			$this->db->update('cabang_organisasi',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_cabang', $id);
			$this->db->delete('cabang_organisasi');
		}

		function get_one($id)
		{
			$param = array('id_cabang'=>$id);
			return $this->db->get_where('cabang_organisasi',$param);
		}
	}
?>