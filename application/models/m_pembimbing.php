<?php
	class m_pembimbing extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function addPembimbingKelompok($kode_dosen, $id_kota, $pemb_ke)
		{
			$query = $this->db->query("INSERT INTO pembimbing values('$kode_dsn','$id_kota','$pemb_ke')");

			return $query;
		} 
		
		function getDataPembimbing($kode_dosen = null)
		{
			if ($kode_dosen === null)
			{
				$query = $this->db->query("SELECT * FROM pembimbing");
			}
			else
			{
				$query = $this->db->query("SELECT * FROM pembimbing WHERE kode_dosen = '$kode_dosen'");
			}

			return $query;
		}
	}
?>