<?php
	class m_anggotaKelompok extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function addAnggotaKelompok($nim, $id_kota)
		{
			$query = $this->db->query("INSERT INTO anggota_kelompok values('$nim','$id_kota')");

			return $query;
		}
		
		function getDataAnggotaKelompok($id_kota)
		{
			$query = $this->db->query("SELECT nim FROM anggota_kelompok WHERE kodekelompok = '$id_kota'");

			return $query;
		}
	}
?>