<?php 
	/**
	 * 
	 */
	class Otentikasi extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_operator');
		}
		
		function login()
		{
			if (isset($_POST['submit']))
			{
				//proses login
				$username = $this->input->post('username');
				$password = $this->input->post('password');
				$hasil = $this->model_operator->login($username,$password);
				
				if($hasil==1)
				{
					//update login terakhir
					$this->db->where('username',$username);
					$this->db->update('operator',array('login_terakhir'=>date('Y-m-d')));
					$this->session->set_userdata(array('status_login'=>'oke','username'=>$username));
					redirect('transaksi');
				}
				else
				{
					redirect('otentikasi/login');
				}
			}
			else
			{
				cek_session_login();
				$this->load->view('form_login');
			}			
		}

		function logout()
		{
			$this->session->sess_destroy();
			redirect('otentikasi/login');
		}
	}
?>