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

			$this->load->view('v_mengelola_seminar_tiga');
		}
		
		// User: Koordinator
		public function daftarDokumenDsgSDD()
		{
			$data['is_validated_yes'] = null;
			$data['is_validated_no'] = null;
			$data['is_updated_yes'] = null;
			$data['is_updated_no'] = null;

			if ($this->input->get('is_validated_yes') == 'true')
			{
				$data['is_validated_yes'] = true;
			}
			elseif ($this->input->get('is_validated_yes') == 'false')
			{
				$data['is_validated_yes'] = false;
			}
			elseif ($this->input->get('is_validated_no') == 'true')
			{
				$data['is_validated_no'] = true;
			}
			elseif ($this->input->get('is_validated_no') == 'false')
			{
				$data['is_validated_no'] = false;
			}
			elseif ($this->input->get('is_updated_yes') == 'true')
			{
				$data['is_updated_yes'] = true;
			}
			elseif ($this->input->get('is_updated_yes') == 'false')
			{
				$data['is_updated_yes'] = false;
			}
			elseif ($this->input->get('is_updated_no') == 'true')
			{
				$data['is_updated_no'] = true;
			}
			elseif ($this->input->get('is_updated_no') == 'false')
			{
				$data['is_updated_no'] = false;
			}

			$this->load->view('v_daftar_dokumen_des_sdd', $data);
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
		public function publish()
		{
			redirect(base_url().'C_mengelolaSeminarTiga/?is_published=true');
		}

		public function validate_yes()
		{
			redirect(base_url().'C_mengelolaSeminarTiga/daftarDokumenDsgSDD/?is_validated_yes=true');
		}

		public function validate_no()
		{
			redirect(base_url().'C_mengelolaSeminarTiga/daftarDokumenDsgSDD/?is_validated_no=true');
		}

		public function update_yes()
		{
			redirect(base_url().'C_mengelolaSeminarTiga/daftarDokumenDsgSDD/?is_updated_yes=true');
		}

		public function update_no()
		{
			redirect(base_url().'C_mengelolaSeminarTiga/daftarDokumenDsgSDD/?is_updated_no=true');
		}

		// User: All and Guest
		public function lihatJadwalSeminarTiga()
		{
			$this->load->view('v_jadwal_seminar_tiga');
		}
	}
?>