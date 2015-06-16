<?php
	class C_mengelolaSeminarSatu extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['is_published'] = null;

			$this->load->view('v_mengelolaSeminarSatu');
		}
		
		// User: Mahasiswa Anggota Kelompok TA
		public function uploadDokumenProposal()
		{
			$this->load->view('v_uploadDokumenProposal');
		}

		// User: Koordinator
		public function validasiDokumenProposal($file)
		{
			if ($this->input->post('submit_validate'))
			{
				$this->load->model('m_upload');

				$validate = $this->input->post('submit_validate');
			}
			else
			{
				redirect(base_url().'c_mengelolaSeminarSatu');
			}
		}

		// User: Koordinator
		public function inputJadwalSeminarSatu()
		{
			
		}

		// User: Koordinator
		public function postJadwalSeminarSatu()
		{
			
		}

		// User: All and Guest
		public function lihatJadwalSeminarSatu()
		{
			$this->load->view('v_jadwalSeminarSatu');
		}
	}
?>