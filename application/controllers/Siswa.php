<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $username = $this->session->userdata('username');
        $role_id = $this->session->userdata('role_id');
        $role = $this->db->get_where('konseli', ['nis' => $username])->row_array();
        $konseli = $role['role_id'];

        if ($role_id != $konseli) {
            redirect('auth/blocked');
        }
    }
    public function index()
    {
        echo 'Siswa';
    }
}
