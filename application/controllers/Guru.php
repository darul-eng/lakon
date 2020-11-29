<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $username = $this->session->userdata('username');
        $role_id = $this->session->userdata('role_id');
        $role = $this->db->get_where('konselor', ['nik' => $username])->row_array();
        $konselor = $role['role_id'];

        if ($role_id != $konselor) {
            redirect('auth/blocked');
        }
    }
    public function index()
    {
        echo 'Guru';
    }
}
