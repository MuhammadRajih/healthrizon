<?php

class checker extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // load Kamus
        $this->load->model('M_healthAZ');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
        $data['kamus'] = $this->M_healthAZ->getAllKamus();
        $this->load->view('view_headerr', $data);
        $this->load->view('view_checker', $data);
        $this->load->view('view_footer');
    }

    public function check() 
    {
        $this->load->model('M_healthAZ');
        $simptom = $this->input->post("gejala");
        $data['gejala'] = $this->M_healthAZ->checker($simptom);
        $this->load->view('view_headerr', $data);
        $this->load->view('view_checker', $data);
        $this->load->view('view_footer');
    }

}