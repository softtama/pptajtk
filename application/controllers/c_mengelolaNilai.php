<?php
	class C_mengelolaNilai extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$this->load->view('v_mengelola_nilai');
		}
		

	}
?>