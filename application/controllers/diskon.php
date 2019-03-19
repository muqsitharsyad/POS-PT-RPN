<?php 
	/**
	 * 
	 */
	class Diskon extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_diskon');
		}

		function index()
		{
			$data['record'] = $this->model_diskon->tampil_data()->result();
			$this->load->view('admin/diskon/daftar_diskon',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{				
				$this->model_diskon->tambah_data();
				redirect('diskon');
			}
			else
			{
				$this->load->model('model_diskon');
				$data['diskon'] = $this->model_diskon->tampil_data()->result();
				$this->load->view('admin/diskon/tambah_diskon',$data);
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{				
				$this->model_diskon->ubah_data();
				redirect('diskon');
			}
			else
			{
				$id = $this->uri->segment(3);
				$data['record'] = $this->model_diskon->get_one($id)->row_array();
				$this->load->view('admin/diskon/ubah_diskon',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_diskon->hapus_data($id);
			redirect('diskon');
		}
	}
?>