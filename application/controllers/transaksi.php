<?php
	/**
	 * 
	 */
	class Transaksi extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model(array('model_barang','model_transaksi','model_kostumer'));
		}

		function index()
		{
			if(isset($_POST['submit_barang']))
			{
				$this->model_transaksi->simpan_data_barang();
				redirect('transaksi/index_2');
			}
			elseif (isset($_POST['submit_kostumer'])) 
			{
				$this->model_transaksi->simpan_data_kostumer();
				redirect('transaksi/index_2');
			}
			else
			{
				$data['barang'] =  $this->model_barang->tampil_data();
				$data['detail'] = $this->model_transaksi->tampil_data_barang()->result();
				$data['kostumer'] = $this->model_transaksi->tampil_data_kostumer();
				$this->load->view('operator/transaksi/form_transaksi',$data);
				//$this->load->view('transaksi/form_transaksi',$data);
			}
		}

		function index_2()
		{
			if (isset($_POST['submit_barang']))
			{
				$this->model_transaksi->simpan_data_barang();
				redirect('transaksi/index_2');
			}
			$data['barang'] =  $this->model_barang->tampil_data();
			$data['detail'] = $this->model_transaksi->tampil_data_barang()->result();
			$data['det_kostumer'] = $this->model_transaksi->tampil_data_detail_kostumer()->result();
			$this->load->view('operator/transaksi/form_transaksi_2',$data);
		}

		function hapus()
		{
			$id = $this->uri->segment(3);
			$this->model_transaksi->hapus_data($id);
			redirect('transaksi/index_2');
		}

		function selesai()
		{
			$tanggal = date('Y-m-d');
			$user = $this->session->userdata('username');
			$id_op = $this->db->get_where('operator',array('username'=>$user))->row_array();
			$data = array('id_operator'=>$id_op['id_operator'],'tgl_transaksi'=>$tanggal);
			$this->model_transaksi->selesai($data);
			//$this->load->view('operator/transaksi/cetak_transaksi',$data);
			redirect('transaksi'); 
		}

		function batal()
		{
			$this->model_transaksi->hapus_transaksi();
			redirect('transaksi');
		}

		public function cetak_transaksi(){
		    ob_start();
		    $data['detail'] = $this->model_transaksi->tampil_data_barang()->result();
			$data['det_kostumer'] = $this->model_transaksi->tampil_data_detail_kostumer()->result();
		    $this->load->view('operator/transaksi/cetak_transaksi', $data);
		    $html = ob_get_contents();
		        ob_end_clean();
		        
		        require_once('./assets/html2pdf/html2pdf.class.php');
		    //$pdf = new HTML2PDF('P','A4','fr', false, 'ISO-8859-15',array(30, 0, 20, 0));
		    $pdf = new HTML2PDF('P','A4','en',false, 'ISO-8859-15',array(30, 10, 30, 10));
		    $pdf->WriteHTML($html);
		    $pdf->Output('Invoice.pdf', 'D');
		  }

		function laporan()
		{	
			$data['record']= $this->model_transaksi->laporan_default();
			$this->load->view('transaksi/laporan',$data);
		}
	}
?>