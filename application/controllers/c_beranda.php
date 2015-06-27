<?php
	class c_beranda extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			// Seminar 1
			if ($this->input->get('beranda') == 'notifikasi_validasi_proposal_true')
			{
				$this->load->view('v_beranda_notif_validasi_prop_true');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_validasi_proposal_false')
			{
				$this->load->view('v_beranda_notif_validasi_prop_false');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_satu')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_satu');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_publikasi_jadwal_seminar_satu')
			{
				$this->load->view('v_beranda_notif_publikasi_jadwal_seminar_satu');
			}
			// Seminar 2
			elseif ($this->input->get('beranda') == 'notifikasi_validasi_analisis_srs_true')
			{
				$this->load->view('v_beranda_notif_validasi_anl_srs_true');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_validasi_analisis_srs_false')
			{
				$this->load->view('v_beranda_notif_validasi_anl_srs_false');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_dua_pending')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_dua_pending');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_dua_approved')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_dua_approved');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_dua_denied')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_dua_denied');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_publikasi_jadwal_seminar_dua')
			{
				$this->load->view('v_beranda_notif_publikasi_jadwal_seminar_dua');
			}
			// Seminar 3
			elseif ($this->input->get('beranda') == 'notifikasi_validasi_desain_sdd_true')
			{
				$this->load->view('v_beranda_notif_validasi_des_sdd_true');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_validasi_desain_sdd_false')
			{
				$this->load->view('v_beranda_notif_validasi_des_sdd_false');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_tiga_pending')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_tiga_pending');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_tiga_approved')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_tiga_approved');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_tambah_jadwal_seminar_tiga_denied')
			{
				$this->load->view('v_beranda_notif_tambah_jadwal_seminar_tiga_denied');
			}
			elseif ($this->input->get('beranda') == 'notifikasi_publikasi_jadwal_seminar_tiga')
			{
				$this->load->view('v_beranda_notif_publikasi_jadwal_seminar_tiga');
			}
			else
			{
				$this->load->view('v_beranda');
			}
		}
	}
?>