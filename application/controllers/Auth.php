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
        $dataa['title'] = 'Login';
        $this->load->view('templates/auth_header', $dataa);
        $this->load->view('auth/login');
        $this->load->view('templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', [
            'is_unique' => 'This email has already taken!'
        ]);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'Password dont match!',
            'min_length' => 'Password too short!'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        $dataa['title'] = 'Instagram Register';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/auth_header', $dataa);
            $this->load->view('auth/registration');
            $this->load->view('templates/auth_footer');
        } else {
            $data = [
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->session->set_flashdata('success', $data['name']);

            $this->db->insert('user', $data);
            //$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            //Congratulation your account has been created! Please Login.</div>');
            $this->session->set_flashdata('message', $data['name']);
            //alert($data['name']);
            echo $data['name'];
            //redirect('auth');
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
}
