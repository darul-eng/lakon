<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'Login Page';
            $this->load->view('peges/login', $data);
        } else {
            $this->__login();
        }
    }
    protected function __login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $admin = $this->db->get_where('admin', ['username' => $username])->row_array();
        $konselor = $this->db->get_where('konselor', ['nik' => $username])->row_array();
        $konseli = $this->db->get_where('konseli', ['nis' => $username])->row_array();

        $passadmin = $admin['password'];
        $passkonselor = $konselor['password'];
        $passkonseli = $konseli['password'];

        if ($admin) {
            # code...
            if (password_verify($password, password_hash($passadmin, PASSWORD_DEFAULT))) {
                # code...
                $data = [
                    'role_id' => $admin['role_id'],
                    'nama_lengkap' => $admin['nama_lengkap'],
                    'username' => $admin['username']
                ];
                $this->session->set_userdata($data);
                redirect('admin');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
                redirect('auth');
            }
        } elseif ($konselor) {
            if (password_verify($password, password_hash($passkonselor, PASSWORD_DEFAULT))) {
                # code...
                $data = [
                    'role_id' => $konselor['role_id'],
                    'nama_lengkap' => $konselor['nama_lengkap'],
                    'username' => $konselor['nik']
                ];
                $this->session->set_userdata($data);
                redirect('guru');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
                redirect('auth');
            }
        } elseif ($konseli) {
            if (password_verify($password, password_hash($passkonseli, PASSWORD_DEFAULT))) {
                # code...
                $data = [
                    'role_id' => $konseli['role_id'],
                    'nama_lengkap' => $konseli['nama_lengkap'],
                    'username' => $konseli['nis']
                ];
                $this->session->set_userdata($data);
                redirect('siswa');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">username is not registered!</div>');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('role_id');
        $this->session->unset_userdata('nama_lengkap');
        $this->session->unset_userdata('username');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">You have been logged out!</div>');
        redirect('auth');
    }
    public function blocked()
    {
        $this->load->view('peges/blocked');
    }
}
