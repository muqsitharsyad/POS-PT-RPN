<?php 
	/**
	 * 
	 */
	class Operator extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('model_operator');
		}
		
		function index()
		{
			$data['record'] = $this->model_operator->tampil_data();
			$this->load->view('admin/operator/daftar_operator',$data);
		}

		function tambah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_operator->tambah_data();
				redirect('operator');
			}
			else
			{
				$this->load->model('model_cabang');
				$data['kategori'] = $this->model_cabang->tampil_data()->result();
				$this->load->view('admin/operator/tambah_operator',$data);
			}
		}

		function ubah()
		{
			if(isset($_POST['submit']))
			{
				$this->model_operator->ubah_data();
				redirect('operator');
			}
			else
			{
				$id = $this->uri->segment(3);
				$this->load->model('model_cabang');
				$data['cabang'] = $this->model_cabang->tampil_data()->result();
				$data['record'] = $this->model_operator->get_one($id)->row_array();
				$this->load->view('admin/operator/ubah_operator',$data);
			}
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_operator->hapus_data($id);
			redirect('operator');
		}
	}
?>