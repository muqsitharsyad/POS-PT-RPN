<?php 
	/**
	 * 
	 */
	class Model_operator extends CI_Model
	{
		
		function login($username,$password)
		{
			$cek = $this->db->get_where('operator',array('username'=>$username, 'password'=>$password));
			if($cek->num_rows()>0)
			{
				return 1;
			}
			else
			{
				return 0;
			}
		}

		function tampil_data()
		{
			$query = "SELECT o.id_operator, o.nama_lengkap, o.username, co.nama_cabang, o.login_terakhir
						FROM operator as o,cabang_organisasi as co
						WHERE o.id_cabang=co.id_cabang";
			return $this->db->query($query);
			//return $this->db->get('operator');
		}

		function tampil_data_session()
		{
			$user = $this->session->userdata('username');
			$query = "SELECT o.username, co.nama_cabang
						FROM operator as o,cabang_organisasi as co
						WHERE o.id_cabang=co.id_cabang and o.username='$user'";
			return $this->db->query($query);
			//return $this->db->get('operator');
		}

		function tambah_data()
		{
				$nama 		= $this->input->post('nama_lengkap');
				$username 	= $this->input->post('username');				
				$cabang 	= $this->input->post('cabang');
				$password 	= $this->input->post('password');
				$data = array('nama_lengkap'=>$nama, 'username'=>$username, 'id_cabang'=>$cabang, 'password'=>$password);
				$this->db->insert('operator',$data);
		}

		function ubah_data()
		{
				$id 		= $this->input->post('id');
				$nama 		= $this->input->post('nama_lengkap');
				$username 	= $this->input->post('username');
				$cabang 	= $this->input->post('cabang');
				$password 	= $this->input->post('password');
				

					if(empty($password))
					{
						$data = array('nama_lengkap'=>$nama, 'username'=>$username);
					}
					else
					{
						$data = array('nama_lengkap'=>$nama, 'username'=>$username, 'id_cabang'=>$cabang, 'password'=>$password);
					}				
				
				$this->db->where('id_operator',$id);
				$this->db->update('operator',$data);
		}

		function hapus_data($id)
		{
			$this->db->where('id_operator', $id);
			$this->db->delete('operator');
		}

		function get_one($id)
		{
			$param = array('id_operator'=>$id);
			return $this->db->get_where('operator',$param);
		}
	}
?>