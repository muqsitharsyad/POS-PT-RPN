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
			$nama = $this->input->post('nama_cabang');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			$web = $this->input->post('web');
			$rek = $this->input->post('rek');
			$no_rek = $this->input->post('no_rek');
			$data = array('nama_cabang'=> $nama, 'alamat'=> $alamat, 'no_telp'=> $no_telp, 'fax'=>$fax, 'email'=>$email, 'website'=>$web, 'rekening'=>$rek, 'no_rek'=>$no_rek);
			$this->db->insert('cabang_organisasi',$data);
		}

		function ubah_data()
		{
			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$no_telp = $this->input->post('no_telp');
			$fax = $this->input->post('fax');
			$email = $this->input->post('email');
			$web = $this->input->post('web');
			$rek = $this->input->post('rek');
			$no_rek = $this->input->post('no_rek');
			$data = array('nama_cabang'=> $nama, 'alamat'=> $alamat, 'no_telp'=> $no_telp, 'fax'=>$fax, 'email'=>$email, 'website'=>$web, 'rekening'=>$rek, 'no_rek'=>$no_rek);
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