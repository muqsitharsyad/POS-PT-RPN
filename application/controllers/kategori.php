<?php
	/**
	 * 
	 */
	class Kategori extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_kategori');
		}
		
		function index()
		{
			$data['record'] = $this->model_kategori->tampil_data();
			$this->load->view('admin/kategori/daftar_kategori',$data);
			//$this->template->load('template','kategori/lihat_data',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_kategori->tambah_data();
				redirect('kategori');
			}
			else
			{
				$this->load->view('admin/kategori/tambah_kategori');
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_kategori->ubah_data();
				redirect('kategori');
			}
			else
			{
				$id = $this->uri->segment(3);
				$data['record'] = $this->model_kategori->get_one($id)->row_array();
				$this->load->view('admin/kategori/ubah_kategori',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_kategori->hapus_data($id);
			redirect('kategori');
		}
	}
?>