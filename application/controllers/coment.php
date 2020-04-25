<?php

class coment extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_coment');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
        $data['coment'] = $this->M_coment->getAllcoment();
        $this->load->view('view_headerr', $data);
        $this->load->view('view_home', $data);
        $this->load->view('view_footer');
    }

    public function AddComent()
    {
        $data = [
            "name" => $this->input->post('name', true),
            "komen" => $this->input->post('komen', true),
        ];
        $this->M_coment->addComent($data);
        redirect('coment');
    }



    public function DeleteComent($id)
    {
        $this->M_coment->DeleteComent($id);
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

    // JSON AJAX
    public function ajaxBy($id)
    {
        $coment = $this->db->get_where('coment', ['id' => $id]);
        $coment = json_encode($id->row());
        echo $coment;
    }
}
