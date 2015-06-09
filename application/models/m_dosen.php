<?php
	class m_dosen extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function getDataDosen($kode_dosen = null)
		{
			if ($kode_dosen === null)
			{
				$query = $this->db->query("SELECT * FROM dosen");
			}
			else
			{
				$query = $this->db->query("SELECT * FROM dosen WHERE kode_dosen = '$nim'");	
			}
			
			return $query;
		}
		
	}
?>