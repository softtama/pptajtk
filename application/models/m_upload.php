<?php
	class m_upload extends CI_model
	{
		function getDataDokumen($id_kota = null)
		{
			if ($kelompok == null)
			{
				$query = $this->db->query("SELECT * FROM upload");
			}
			else
			{
				$query = $this->db->query("SELECT * FROM upload WHERE kodekelompok = '$id_kota'");
			}

			return $query;
		}
	}
?>