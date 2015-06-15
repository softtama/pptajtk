<?php
	class m_kelompokTA extends CI_model
	{
		public function createKelompokTA($id_kota, $topik)
		{
			$query = $this->db->query("INSERT INTO kelompok_ta values('$id_kota', '$topik', 0)");

			return $query;
		}
		
		public function getDataKelompokTA($id_kota = null)
		{
			if ($id_kota === null)
			{
				$query = $this->db->query("SELECT * FROM kelompok_ta");
			}
			else
			{
				$query = $this->db->query("SELECT * FROM kelompok_ta WHERE kodekelompok = '$id_kota'");
			}

			return $query;
		}

		public function getAnggotaKelompokTA($id_kota)
		{
			$query = $this->db->query
				(
				   "SELECT kta.kodekelompok, ak.nim, mhs.nama_mahasiswa
					FROM kelompok_ta kta
					LEFT JOIN anggota_kelompok ak
					ON ak.kodekelompok = kta.kodekelompok
					LEFT JOIN mahasiswa mhs
					ON mhs.nim = ak.nim
					WHERE kta.kodekelompok = '$id_kota'"
				);

			return $query;
		}

		public function getPembimbingKelompokTA($id_kota)
		{
			$query = $this->db->query
				(
				   "SELECT kta.kodekelompok, pb.kode_dosen, dsn.nama_dosen
					FROM   kelompok_ta kta
					LEFT JOIN pembimbing pb
					ON     pb.kodekelompok = kta.kodekelompok
					LEFT JOIN dosen dsn
					ON     dsn.kode_dosen = pb.kode_dosen
					WHERE  kta.kodekelompok = '$id_kota'"
				);

			return $query;
		}

		public function setStatusKePublished()
		{
			$query = $this->db->query
				(
				   "UPDATE kelompok_ta
					SET    ispublished = TRUE
					WHERE  ispublished = FALSE
					"
				);

			return $query;
		}
	}
?>