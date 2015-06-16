<?php
	class c_beranda extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$this->load->view('v_beranda');
		}
	}
?>