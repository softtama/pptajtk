<?php
	class C_mengelolaKelompokTAtemp extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['status_is_created'] = null;
			$data['status_is_published'] = null;

			if ($this->input->get('is_created') == 'true')
			{
				$data['status_is_created'] = true;
			}

			if ($this->input->get('is_created') == 'false')
			{
				$data['status_is_created'] = false;
			}

			if ($this->input->get('is_published') == 'true')
			{
				$data['status_is_published'] = true;
			}

			if ($this->input->get('is_published') == 'false')
			{
				$data['status_is_published'] = false;
			}

			$this->load->model('m_mahasiswa', '', true);
			$this->load->model('m_dosen', '', true);

			$data['list_mhs'] = $this->m_mahasiswa->getDataMhs();
			$data['list_dsn'] = $this->m_dosen->getDataDosen();

			$this->load->view('v_mengelola_kel_ta_temp', $data);
		}

		public function postKelompokTAtemp()
		{
			//$this->load->model('m_kelompokTA', '', true);

			//$this->m_kelompokTA->setStatusKePublished();

			// Redirect to index, show notification to current User
			redirect(base_url().'C_mengelolaKelompokTAtemp?is_published=true');	
		}
	}
?>