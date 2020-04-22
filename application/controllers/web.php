<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Web extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
	}
 
	public function index(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_home',$data);
		$this->load->view('view_footer',$data);
	}

	public function Hasilkuesioner(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HASIL KUESIONER";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_hasil',$data);
		$this->load->view('view_footer',$data);
	}

	public function viewhome(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HOME";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_home',$data);
		$this->load->view('view_footer',$data);
	}

	public function viewcheck(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "CHECK";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_checker',$data);
		 $this->load->view('view_footer',$data);
	}

	public function viewhealthaz(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "HEALTH A.Z";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_healthAZ',$data);
		$this->load->view('view_footer',$data);
	}

	public function viewabout(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "ABOUT";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}

	public function viewlogout(){		
		$data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
		$data['nama_menu'] = "LOGOUT";
		$this->load->view('view_headerr',$data);
		$this->load->view('view_logout',$data);
		$this->load->view('view_footer',$data);
	}


	
 
}

?>