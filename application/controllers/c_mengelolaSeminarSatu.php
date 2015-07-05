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
			$data['status_is_validated'] = null;
			$data['status_is_updated'] = null;

			$this->load->view('v_mengelola_seminar_satu', $data);
		}
		
		// User: Koordinator
		public function daftarDokumenProposal()
		{
			$data['status_is_validated'] = null;
			$data['status_is_updated'] = null;

			if ($this->input->get('status_is_validated') == 'true')
			{
				$data['status_is_validated'] = true;
			}
			elseif ($this->input->get('status_is_validated') == 'false')
			{
				$data['status_is_validated'] = false;
			}
			elseif ($this->input->get('status_is_updated') == 'true')
			{
				$data['status_is_updated'] = true;
			}

			$this->load->view('v_daftar_dokumen_proposal', $data);
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
			$this->load->view('v_jadwal_seminar_satu');
		}
	}
?>