<?php
	/**
	 * 
	 */
	class Satuan extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_satuan');
		}
		
		function index()
		{
			$data['record'] = $this->model_satuan->tampil_data();
			$this->load->view('admin/satuan/daftar_satuan',$data);
			//$this->template->load('template','kategori/lihat_data',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_satuan->tambah_data();
				redirect('satuan');
			}
			else
			{
				$this->load->view('admin/satuan/tambah_satuan');
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_satuan->ubah_data();
				redirect('satuan');
			}
			else
			{
				$id = $this->uri->segment(3);
				$data['record'] = $this->model_satuan->get_one($id)->row_array();
				$this->load->view('admin/satuan/ubah_satuan',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_satuan->hapus_data($id);
			redirect('satuan');
		}
	}
?>