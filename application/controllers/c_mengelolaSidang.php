<?php
	class C_mengelolaSidang extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['is_published'] = null;

			$this->load->view('v_mengelolaSidang');
		}

		// User: Koordinator
		public function inputJadwalSidang()
		{
			
		}

		// User: Koordinator
		public function publish()
		{
			redirect(base_url().'C_mengelolaSidang/?is_published=true');
		}

		// User: All and Guest
		public function lihatJadwalSidang()
		{
			$this->load->view('v_jadwal_sidang');
		}
	}
?>