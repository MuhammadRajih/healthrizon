<?php

class healthAZ extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_healthAZ');
        $this->load->library('form_validation');
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        $data['judul'] = 'Health A.Z';
        $data['kamus'] = $this->M_healthAZ->getAllKamus();
        $this->load->view('view_headerr', $data);
        $this->load->view('kamus/view_index', $data);
        $this->load->view('view_footer');
    }

    public function AddKamus()
    {
        $data = array(
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "photo" => $this->input->post('photo', true),
        );
        $this->M_healthAZ->Add($data);
        redirect('healthAZ');
    }

    public function UpdateKamus($id)
    {
        $data['judul'] = 'Form Ubah Info';
        $data['kamus'] = $this->M_healthAZ->getAllKamus();

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');

        $config['upload_path']          = './assets/images/kamus';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');

        $file = $this->upload->data();
        $gambar = $file['file_name'];

        $update = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "photo" => $gambar
        ];
        if ($this->form_validation->run() != false) {
            $this->M_healthAZ->UpdateKamus($id, $update);
            redirect('healthAZ');
        } else {
            $this->load->view('view_headerr', $data);
            $this->load->view('kamus/view_index', $data);
            $this->load->view('view_footer');
        }
    }

    public function DeleteKamus($id)
    {
        $this->M_healthAZ->DeleteKamus($id);
        redirect('healthAZ');
    }

    public function Save()
    {
        $data['judul'] = 'Form Add Info';
        $data['kamus'] = $this->M_healthAZ->getAllKamus();

        $this->form_validation->set_rules('judul', 'judul', 'required');
        $this->form_validation->set_rules('isi', 'isi', 'required');

        $config['upload_path']          = './assets/images/kamus';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('gambar');

        $file = $this->upload->data();
        $gambar = $file['file_name'];

        $add = [
            "judul" => $this->input->post('judul', true),
            "isi" => $this->input->post('isi', true),
            "photo" => $gambar
        ];
        if ($this->form_validation->run() != false) {
            $this->M_healthAZ->AddKamus($add);
            redirect('healthAZ');
        } else {
            $this->load->view('view_headerr', $data);
            $this->load->view('kamus/view_index', $data);
            $this->load->view('view_footer');
        }
    }

    public function view()
    {
        $this->load->model('M_healthAZ');
        $id = $this->input->get('id', true);
        $data['judul'] = 'Kamus';
        $data['kamus'] = $this->M_healthAZ->getKamusById($id);
        $this->load->view('view_headerr', $data);
        $this->load->view('kamus/view_penyakit', $data);
        $this->load->view('view_footer');
    }

    // JSON AJAX
    public function ajaxBy($id)
    {
        $kamus = $this->db->get_where('kamus', ['id' => $id]);
        $kamus = json_encode($id->row());
        echo $kamus;
    }
}
