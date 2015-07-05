<?php
	class c_pesan extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$this->load->view('v_kirim_pesan');
		}
		
		public function kirimPesan()
		{
			
		}
	}
?>