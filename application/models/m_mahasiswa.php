<?php
	class m_mahasiswa extends CI_model
	{
		function __construct()
		{
			parent::__construct();
		}
		
		function getDataMhs($nim = null)
		{
			if ($nim === null)
			{
				$query = $this->db->query("SELECT * FROM mahasiswa");
			}
			else
			{
				$query = $this->db->query("SELECT * FROM mahasiswa WHERE nim = '$nim'");	
			}
			
			return $query;
		}
	}
?>