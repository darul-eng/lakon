<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $username = $this->session->userdata('username');
        $role_id = $this->session->userdata('role_id');
        $role = $this->db->get_where('admin', ['username' => $username])->row_array();
        $admin = $role['role_id'];

        if ($role_id != $admin) {
            redirect('auth/blocked');
        }
        $this->load->model('User_model');
    }
    public function index()
    {
        $data['title'] = 'Dashboard';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar', $data);
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function konselor()
    {
        // $role = 2;
        $data['title'] = 'Daftar Konselor';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        // // config
        // $array = array('fullname' => $data['keyword'], 'role' => $role);
        // $this->db->like($array);
        // // $this->db->or_like('nis_nik', $data['keyword']);
        // $this->db->from('orang');

        $config['base_url'] = 'http://localhost/lakon/admin/konselor';

        $this->db->like('nama_lengkap', $data['keyword']);
        $this->db->or_like('nik', $data['keyword']);
        $this->db->from('konselor');
        $config['total_rows'] = $this->db->count_all_results();

        $config['per_page'] = 8;

        // // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        // $data['konselor'] = $this->User_model->getUserByRole($role, $config['per_page'], $data['start'], $data['keyword']);
        $data['konselor'] = $this->User_model->getKonselor($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/konselor/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function createkonselor()
    {
        $input = $this->input->post(NULL, TRUE);

        $data['title'] = 'Tambah Konselor';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nik', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('gridRadios', 'Gender', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/konselor/create', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                // 'role' => $input['role'],
                'password' => $input['password'],
                'nama_lengkap' => $input['namalengkap'],
                'nik' => $input['nik'],
                'no_hp' => $input['no_hp'],
                'email' => $input['email'],
                'gender' => $input['gridRadios']
            ];
            $this->User_model->storekonselor($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konselor Berhasil Ditambahkan!</div>');
            redirect('admin/konselor');
        }
    }
    // public function showkonselor()
    // {
    //     // 
    // }
    public function updatekonselor($id)
    {
        $input = $this->input->post(NULL, TRUE);

        $data['title'] = 'Edit Konselor';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['konselor'] = $this->User_model->getKonselorById($id);

        $this->form_validation->set_rules('nik', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('gridRadios', 'Gender', 'required');
        if ($this->form_validation->run() == false) {
            // redirect('admin/createkonselor');
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/konselor/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                // 'role' => $input['role'],
                'password' => $input['password'],
                'nama_lengkap' => $input['namalengkap'],
                'nik' => $input['nik'],
                'no_hp' => $input['no_hp'],
                'email' => $input['email'],
                'gender' => $input['gridRadios']
            ];
            $this->User_model->updatekonselor($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konselor Berhasil DiUbah!</div>');
            redirect('admin/konselor');
        }
    }

    public function destroyKonselor($id)
    {
        // $user = $this->db->get_where('konselor', ['id' => $id])->row_array();
        // $role = $user['role'];
        $this->User_model->destroyKonselor($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konselor Berhasil DiHapus!</div>');
        redirect('admin/konselor');
        // if ($role == '2') {
        //     $this->User_model->destroy($id);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konselor Berhasil DiHapus!</div>');
        //     redirect('admin/konselor');
        // } elseif ($role == '3') {
        //     $this->User_model->destroy($id);
        //     $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konseli Berhasil DiHapus!</div>');
        //     redirect('admin/konseli');
        // }
    }

    // KONSELI
    public function konseli()
    {
        $role = 3;
        $data['title'] = 'Daftar Konseli';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        if ($this->input->post('submit')) {
            $data['keyword'] = $this->input->post('keyword');
            $this->session->set_userdata('keyword', $data['keyword']);
        } else {
            $data['keyword'] = $this->session->userdata('keyword');
        }
        // // config
        // $array = array('fullname' => $data['keyword'], 'role' => $role);
        // $this->db->like($array);
        // $this->db->or_like('nis_nik', $data['keyword']);
        // $this->db->from('orang');

        // $config['total_rows'] = $this->db->count_all_results();
        $config['base_url'] = 'http://localhost/lakon/admin/konseli';

        $this->db->like('nama_lengkap', $data['keyword']);
        $this->db->or_like('nis', $data['keyword']);
        $this->db->from('konseli');
        $config['total_rows'] = $this->db->count_all_results();

        $config['per_page'] = 8;

        // initialize
        $this->pagination->initialize($config);

        $data['start'] = $this->uri->segment(3);

        $data['konseli'] = $this->User_model->getKonseli($config['per_page'], $data['start'], $data['keyword']);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/templates/topbar', $data);
        $this->load->view('admin/konseli/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function createkonseli()
    {
        $input = $this->input->post(NULL, TRUE);

        $data['title'] = 'Tambah Konseli';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();

        $this->form_validation->set_rules('nis', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('gridRadios', 'Gender', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/konseli/create', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                'password' => $input['password'],
                'nama_lengkap' => $input['namalengkap'],
                'nis' => $input['nis'],
                'no_hp' => $input['no_hp'],
                'kelas' => $input['kelas'],
                'gender' => $input['gridRadios']
            ];
            $this->User_model->storekonseli($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konseli Berhasil Ditambahkan!</div>');
            redirect('admin/konseli');
        }
    }
    // public function showkonseli($id)
    // {
    //     $data['konselibyid'] = $this->User_model->getKonseliById($id);
    //     $this->load->view('admin/konseli/index', $data);
    // }
    public function updatekonseli($id)
    {
        $input = $this->input->post(NULL, TRUE);

        $data['title'] = 'Edit Konseli';
        $data['admin'] = $this->db->get_where('admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['konseli'] = $this->User_model->getKonseliById($id);

        $this->form_validation->set_rules('nis', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim|required');
        $this->form_validation->set_rules('no_hp', 'No Telpon', 'trim|required|numeric');
        $this->form_validation->set_rules('kelas', 'Kelas', 'trim|required');
        $this->form_validation->set_rules('gridRadios', 'Gender', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/templates/header', $data);
            $this->load->view('admin/templates/sidebar', $data);
            $this->load->view('admin/templates/topbar', $data);
            $this->load->view('admin/konseli/edit', $data);
            $this->load->view('admin/templates/footer');
        } else {
            $data = [
                'password' => $input['password'],
                'nama_lengkap' => $input['namalengkap'],
                'nis' => $input['nis'],
                'no_hp' => $input['no_hp'],
                'kelas' => $input['kelas'],
                'gender' => $input['gridRadios']
            ];
            $this->User_model->updatekonseli($data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konseli Berhasil DiUbah!</div>');
            redirect('admin/konseli');
        }
    }
    public function destroyKonseli($id)
    {
        $this->User_model->destroyKonseli($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Konseli Berhasil DiHapus!</div>');
        redirect('admin/konseli');
    }
}
