<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_id extends CI_Model
{
    public function index()
    {
        $this->load->view('view_home');
    }
    function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function getUser()
    {
        return $this->db->get('user');
    }

    public function getUserId($id)
    {
        return $this->db->get_where('profile', ["id" => $id])->row_array();
    }
    public function getSessionId()
    {
        $_SESSION = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        return $_SESSION;
    }
}
