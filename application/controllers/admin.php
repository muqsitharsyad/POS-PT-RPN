<?php
	/**
	 * 
	 */
	class Admin extends CI_Controller
	{
		
		function index()
		{
			$this->load->view('admin/overview');
		}
	}
?>