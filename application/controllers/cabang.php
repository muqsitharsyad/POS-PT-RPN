<?php
	/**
	 * 
	 */
	class Cabang extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_cabang');
		}
		
		function index()
		{
			$data['record'] = $this->model_cabang->tampil_data();
			$this->load->view('admin/cabang/daftar_cabang',$data);
			//$this->template->load('template','kategori/lihat_data',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_cabang->tambah_data();
				redirect('cabang');
			}
			else
			{
				$this->load->view('admin/cabang/tambah_cabang');
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_cabang->ubah_data();
				redirect('cabang');
			}
			else
			{
				$id = $this->uri->segment(3);
				$data['record'] = $this->model_cabang->get_one($id)->row_array();
				$this->load->view('admin/cabang/ubah_cabang',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_cabang->hapus_data($id);
			redirect('cabang');
		}
	}
?>