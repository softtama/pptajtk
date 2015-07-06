<?php
	class C_mengelolaNilai extends CI_controller
	{
		function _construct()
		{
			parent::_construct();
		}
		
		public function index()
		{
			$data['status_is_created'] = null;
			$data['status_is_updated'] = null;
			$data['status_is_deleted'] = null;
			$data['status_is_published'] = null;

			if ($this->input->get('is_created') == 'true')
			{
				$data['status_is_created'] = true;
			}

			if ($this->input->get('is_created') == 'false')
			{
				$data['status_is_created'] = false;
			}

			if ($this->input->get('is_updated') == 'true')
			{
				$data['status_is_updated'] = true;
			}

			if ($this->input->get('is_updated') == 'false')
			{
				$data['status_is_updated'] = false;
			}

			if ($this->input->get('is_deleted') == 'true')
			{
				$data['status_is_deleted'] = true;
			}

			if ($this->input->get('is_deleted') == 'false')
			{
				$data['status_is_deleted'] = false;
			}

			if ($this->input->get('is_published') == 'true')
			{
				$data['status_is_published'] = true;
			}

			if ($this->input->get('is_published') == 'false')
			{
				$data['status_is_published'] = false;
			}

			$this->load->view('v_mengelola_nilai', $data);
		}
		
		public function delete()
		{
			redirect(base_url().'C_mengelolaNilai/?is_deleted=true');
		}

		public function publish()
		{
			redirect(base_url().'C_mengelolaNilai/?is_published=true');
		}
	}
?>