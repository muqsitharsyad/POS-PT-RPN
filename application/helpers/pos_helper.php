<?php 
	function cek_session()
	{
		$ses = & get_instance();
		$session = $ses->session->userdata('status_login');
		if($session!='oke')
		{
			redirect('otentikasi/login');
		}
	}

	function cek_session_login()
	{
		$ses = & get_instance();
		$session = $ses->session->userdata('status_login');
		if($session=='oke')
		{
			redirect('transaksi');
		}
	}
?>