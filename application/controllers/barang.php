<?php 
	/**
	 * 
	 */
	class Barang extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_barang');
		}

		function index()
		{
			$data['record'] = $this->model_barang->tampil_data()->result();
			$this->load->view('admin/barang/daftar_barang',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{				
				$this->model_barang->tambah_data();
				redirect('barang');
			}
			else
			{
				$this->load->model('model_kategori');
				$data['kategori'] = $this->model_kategori->tampil_data()->result();
				$this->load->view('admin/barang/tambah_barang',$data);
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{				
				$this->model_barang->ubah_data();
				redirect('barang');
			}
			else
			{
				$id = $this->uri->segment(3);
				$this->load->model('model_kategori');
				$data['kategori'] = $this->model_kategori->tampil_data()->result();
				$data['record'] = $this->model_barang->get_one($id)->row_array();
				$this->load->view('admin/barang/ubah_barang',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_barang->hapus_data($id);
			redirect('barang');
		}
	}
?>