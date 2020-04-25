<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller

{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        // echo 'auth/index';
        $data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
        $this->load->view('view_headerr', $data);
        //$this->load->view('view_footer', $data);
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');


        if ($this->form_validation->run() == false) {
            $dataa['title'] = 'Health Login';
            $this->load->view('templates/auth_header', $dataa);
            $this->load->view('auth/login');
            $this->load->view('templates/auth_footer');
        } else {
            //sukses
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();
        // var_dump($user);
        // die;
        //ada user
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    //data ke session
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id'],
                    ];
                    $this->session->set_userdata($data);
                    //redirect('User');
                    redirect('web/viewhome');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong password.</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email has not activated.</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email is not regitered.</div>');
            redirect('auth');
        }
    }

    public function registration()
    {
        $data['nama_aplikasi'] = "BRING ME TO HEALTH'RIZON";
        $this->load->view('view_headerr', $data);
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already taken!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        $dataa['title'] = 'Health Register';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $dataa);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->session->set_flashdata('success', $data['name']);

            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your account has been created! Please Login.</div>');
            // $this->session->set_flashdata('message', $data['name']);
            redirect('auth');
            //alert($data['name']);
            // echo "Hi," . $data['name'] . "Silahkan untuk login";
        }
    }
    public function check_database()
    {


        ini_set('display_errors', 'Off');

        //  Load the database config file.
        if (file_exists($file_path = APPPATH . 'config/database.php')) {
            include($file_path);
        }

        $config = $db[$active_group];

        //  Check database connection if using mysqli driver
        if ($config['dbdriver'] === 'mysqli') {
            $mysqli = new mysqli($config['hostname'], $config['username'], $config['password'], $config['database']);

            if (!$mysqli->connect_error) {
                $mysqli->close();
                echo "Berhasil terhubung ke : " . $config['database'];
                return true;
            }

            $mysqli->close();
        }

        return false;
    }

    public function logout()
    {
        $this->session->unset_userdata('name');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('image');
        $this->session->unset_userdata('password');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out.</div>');
        redirect('auth');
    }
}
