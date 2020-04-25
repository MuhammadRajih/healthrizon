<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('m_id');
		$this->load->model('m_kamus');
		$this->load->model('M_coment');
	}

	public function index()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$this->load->view('view_headerr', $data);
		$this->load->view('view_home', $data);
		$this->load->view('view_footer', $data);
	}

	public function Hasilkuesioner()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HASIL KUESIONER";
		$this->load->view('view_headerr', $data);
		$this->load->view('view_hasil', $data);
		$this->load->view('view_footer', $data);
	}

	public function viewhome()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HOME";
		$data['coment'] = $this->M_coment->getAllcoment();
		$this->load->view('view_headerr', $data);
		$this->load->view('view_home', $data);
		$this->load->view('view_footer', $data);
	}

	// ----------------------------------------------------------------

	public function AddComent()
	{
		$data = [
			"name" => $this->input->post('name', true),
			"coment" => $this->input->post('coment', true),
		];
		$this->M_coment->addComent($data);
		redirect('coment');
	}

	// JSON AJAX
	public function ajaxBy($id)
	{
		$coment = $this->db->get_where('coment', ['id' => $id]);
		$coment = json_encode($id->row());
		echo $coment;
	}

	public function deleteComent($id)
	{
		$this->M_coment->deleteComent($id);
		redirect('coment');
	}

	public function updateComent($id)
	{
		$update = [
			"id" => $id,
			"name" => $this->input->post('name', true),
			"coment" => $this->input->post('coment', true),
		];
		$this->M_coment->updateComent($id, $update);
		redirect('coment');
	}

	// ----------------------------------------------------------------

	public function viewcheck()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "CHECK";
		$this->load->view('view_headerr', $data);
		$this->load->view('view_checker', $data);
		$this->load->view('view_footer', $data);
	}

	public function viewhealthaz()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HEALTH A.Z";
		$data['kamus'] = $this->m_kamus->view();
		$this->load->view('view_headerr', $data);
		$this->load->view('view_healthAZ', $data);
		$this->load->view('view_footer', $data);
	}

	public function viewabout()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "ABOUT";
		$this->load->view('view_headerr', $data);
		$this->load->view('view_about', $data);
		$this->load->view('view_footer', $data);
	}

	public function viewlogout()
	{
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "LOGOUT";
		$this->load->view('view_headerr', $data);
		$this->load->view('view_logout', $data);
		$this->load->view('view_footer', $data);
	}

	public function tambah()
	{
		$data = array();

		if ($this->input->post('submit')) {
			$upload = $this->m_kamus->upload();

			if ($upload['result'] == "success") {
				$this->m_kamus->save($upload);

				redirect('web/viewhealthaz');
			} else {
				$data['message'] = $upload['error'];
			}
		}

		$this->load->view('web', $data);
	}
}
