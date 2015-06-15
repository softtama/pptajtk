<?php
	class C_mengelolaSeminarDua extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['is_published'] = null;

			$this->load->view('v_mengelolaSeminarDua');
		}
		
		// User: Mahasiswa Anggota Kelompok TA
		public function uploadDokumenAnlSRS()
		{
			$this->load->view('v_uploadDokumenAnlSRS');
		}

		// User: Koordinator
		public function validasiDokumenAnlSRS($file)
		{
			if ($this->input->post('submit_validate'))
			{
				$this->load->model('m_upload');

				$validate = $this->input->post('submit_validate');
			}
			else
			{
				redirect(base_url().'c_mengelolaSeminarDua');
			}
		}

		// User: Koordinator
		public function inputJadwalSeminarDua()
		{
			
		}

		// User: Koordinator
		public function postJadwalSeminarDua()
		{
			
		}
	}
?>