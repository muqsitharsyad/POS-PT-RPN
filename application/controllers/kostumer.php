<?php 
	/**
	 * 
	 */
	class Kostumer extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_kostumer');
			cek_session();
		}
		
		function index()
		{
			$data['record'] = $this->model_kostumer->tampil_data();
			$this->load->view('operator/Kostumer/daftar_kostumer',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_kostumer->tambah_data();
				redirect('Kostumer');
			}
			else
			{
				$this->load->model('model_kostumer');
				$data['Kostumer'] = $this->model_kostumer->tampil_data()->result();
				$this->load->view('operator/Kostumer/tambah_kostumer',$data);
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_kostumer->ubah_data();
				redirect('Kostumer');
			}
			else
			{
				$id = $this->uri->segment(3);
				$this->load->model('model_kostumer');
				$data['record'] = $this->model_kostumer->get_one($id)->row_array();
				$this->load->view('operator/Kostumer/ubah_kostumer',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_kostumer->hapus_data($id);
			redirect('Kostumer');
		}
	}
?>