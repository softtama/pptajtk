<?php
	class c_kota_beranda extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$this->load->view('v_kota_beranda');
		}
	}
?>