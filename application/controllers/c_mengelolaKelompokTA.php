<?php
	class C_mengelolaKelompokTA extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['status_iscreated'] = null;

			if ($this->input->get('iscreated') == 'true')
			{
				$data['status_iscreated'] = true;
			}

			if ($this->input->get('iscreated') == 'false')
			{
				$data['status_iscreated'] = false;
			}

			$this->load->model('m_mahasiswa', '', true);
			$this->load->model('m_dosen', '', true);

			$data['list_mhs'] = $this->m_mahasiswa->getDataMhs();
			$data['list_dsn'] = $this->m_dosen->getDataDosen();

			$data['list_detail_kota'] = $this->getDataKelompokTA();

			$this->load->view('v_mengelolaKelompokTA', $data);
		}
		
		public function inputKelompokTA()
		{
			// Load model
			$this->load->model('m_kelompokTA', '', true);
			$this->load->model('m_anggotaKelompok', '', true);
			$this->load->model('m_pembimbing', '', true);
			
			// Data gathering
			$id_kota	= $this->input->post('id_kota');
			$nama_topik	= $this->input->post('nama_topik');
			$anggota_1	= $this->input->post('anggota_1');
			$anggota_2	= $this->input->post('anggota_2');
			$anggota_3	= $this->input->post('anggota_3');
			$pemb_1		= $this->input->post('pemb_1');
			$pemb_2		= $this->input->post('pemb_2');
			
			// Validation
			if ($id_kota == '' || $anggota_1 == '0' || $pemb_1 == '0' || $pemb_2 == '0')
			{
				redirect(base_url().'c_mengelolaKelompokTA?iscreated=false');
			}

			// Query
			$this->m_kelompokTA->createKelompokTA($id_kota, $nama_topik);
			$this->m_anggotaKelompok->addAnggotaKelompok($anggota_1, $id_kota);
			$this->m_anggotaKelompok->addAnggotaKelompok($anggota_2, $id_kota);
			$this->m_anggotaKelompok->addAnggotaKelompok($anggota_3, $id_kota);
			$this->m_pembimbing->addPembimbingKelompok($pemb_1, $id_kota, '1');
			$this->m_pembimbing->addPembimbingKelompok($pemb_2, $id_kota, '2');
			
			// Redirect to index, show notification to current User
			redirect(base_url().'c_mengelolaKelompokTA?iscreated=true');
		}

		public function getDataKelompokTA()
		{
			$this->load->model('m_kelompokTA', '', true);

			$list_kota = $this->m_kelompokTA->getDataKelompokTA();

			$list_detail_kota = array();

			foreach ($list_kota->result() as $data)
			{
				$id_kota = $data->KODEKELOMPOK;
				$nama_topik = $data->TOPIK;
				$list_ak = $this->m_kelompokTA->getAnggotaKelompokTA($data->KODEKELOMPOK);
				$list_pb = $this->m_kelompokTA->getPembimbingKelompokTA($data->KODEKELOMPOK);

				$list_detail_kota[] = array('id_kota' => $id_kota, 'nama_topik' => $nama_topik, 'list_ak' => $list_ak, 'list_pb' => $list_pb);
			}

			return $list_detail_kota;
		}
	}
?>