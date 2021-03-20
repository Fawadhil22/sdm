<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('userlogin');
        // if (!$this->session->logged_in) {
        //     redirect('auth');
        // }
    }


    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('login');
        } else {
            // jika validasinya sukses
            // echo 'mantap';
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('userlogin', [
            'email' => $email,
            // 'password' => $password
        ])->row_array();
        // var_dump($user);

        // jika user ada
        if ($user) {
            if ($user['password'] == $password) {

                $data = [
                    'email' => $user['email'],
                    'nama' => $user['nama'],
                    'level' => $user['level'],
                ];

                $this->session->set_userdata($data);

                if ($user['level'] == "admin") {
                    redirect('home');
                } else {
                    echo "ga bisAAA";
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password!</div>');
                redirect('welcome');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username is not registered</div>');
            redirect('welcome');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('level');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logout ! </div>');
        redirect('welcome');
    }

    public function registration()
    {
       
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('registration');
        } else {
            // jika validasinya sukses
            // echo 'mantap';
            $this->_regis();
        }
    }

    private function _regis()
    {
        $user = [
            'nama' => $this->input->post('nama'),
            'email' => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level' => 'admin',
        ];

        $pw = $this->input->post('password');
        $pw1 = $this->input->post('password1');

        $cek = $this->db->get_where("userlogin", $user)->num_rows();

        if ($cek > 0) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Email sudah digunakan!</div>');
            redirect('welcome/registration');
        } elseif ($pw != $pw1) {
            $this->session->set_flashdata('alert', '<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
            redirect('welcome/registration');
        } else {
            $this->userlogin->insert($user);
            $this->session->set_flashdata('alert', '<div class="alert alert-success" role="alert">Anda berhasil mendaftar, Silahkan login ! </div>');
            redirect('welcome');
        }
    }

//     public function forbidden()
//     {
//         $data['heading'] = 'Access Denied';
//         $data['message'] = 'You are not allowed access this directory';

//         $this->load->view('templates/main_header', $data);
//         $this->load->view('templates/side_bar');
//         $this->load->view('templates/top_bar');
//         $this->load->view('errors/html/error_404', $data);
//         $this->load->view('templates/main_footer');
//     }
}
