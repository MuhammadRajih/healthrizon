<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_kamus extends CI_Model
{
    public function view()
    {
        return $this->db->get('kamus')->result();
    }

    public function upload()
    {
        $config['upload_path'] = './upload/info/';
        $config['allowed_types'] = 'jpg|png|jpeg';
        $config['max_size']    = '2048';
        $config['remove_space'] = TRUE;

        $this->load->library('upload', $config);
        if ($this->upload->do_upload('input_gambar')) {
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
            return $return;
        } else {
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
            return $return;
        }
    }
}
