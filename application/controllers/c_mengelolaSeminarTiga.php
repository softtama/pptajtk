<?php
	class C_mengelolaSeminarTiga extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['is_published'] = null;

			$this->load->view('v_mengelolaSeminarTiga');
		}
		
		// User: Mahasiswa Anggota Kelompok TA
		public function uploadDokumenDsgSDD()
		{
			$this->load->view('v_uploadDokumenDsgSDD');
		}

		// User: Koordinator
		public function validasiDokumenDsgSDD($file)
		{
			if ($this->input->post('submit_validate'))
			{
				$this->load->model('m_upload');

				$validate = $this->input->post('submit_validate');
			}
			else
			{
				redirect(base_url().'c_mengelolaSeminarTiga');
			}
		}

		// User: Koordinator
		public function inputJadwalSeminarTiga()
		{
			
		}

		// User: Koordinator
		public function postJadwalSeminarTiga()
		{
			
		}
	}
?>