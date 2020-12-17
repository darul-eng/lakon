<?php
defined('BASEPATH') or exit('No direct script access allowed');
require 'vendor/autoload.php';

class Konselor extends CI_Controller
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
        $this->load->model('User_model');
        $this->load->model('Chat_model');
    }
    public function index()
    {
        $data['title'] = 'Artikel Inspiratif';
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/landing');
        $this->load->view('templates/footer-landing');
    }
    public function choose()
    {
        $data['title'] = 'Pilih Konseli';
        $data['penerima'] = $this->session->userdata('username');
        $data['konseli'] = $this->Chat_model->getAllKonseli();
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/pilihKonseli', $data);
        $this->load->view('templates/footer-landing');
    }
    public function chat($id)
    {
        $data['title'] = 'Chat';
        $data['konseli'] = $this->User_model->getKonseliById($id);
        $data['konselor'] = $this->User_model->getKonselorById($id);


        // menyimpan username dari pengguna yang aktif
        $data['pengirim'] = $this->session->userdata('username');

        // menampung username/nik dari konselor yang dipilih
        if ($this->input->post('nis')) {
            $data['penerima'] = $this->input->post('nis');
            $this->session->set_userdata('penerima', $data['penerima']);
        } else {
            $data['penerima'] = $this->session->userdata('penerima');
        }

        // data chat berdasarkan username penerima dan pengirim
        $data['chat'] = $this->Chat_model->chatPerson($data['pengirim'], $data['penerima']);
        // $data['chat'] = $this->db->order_by('id', 'ASC')->get('chat')->result_array();


        // $this->form_validation->set_rules('nama', 'Nama', 'trim|required');
        $this->form_validation->set_rules('pesan', 'Pesan', 'trim|required');
        $this->form_validation->set_rules('penerima', 'Penerima', 'required');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header-landing', $data);
            $this->load->view('peges/chat', $data);
            $this->load->view('templates/footer-landing');
        } else {
            $data = [
                'u_pengirim' => $this->input->post('pengirim'),
                'pesan' => $this->input->post('pesan'),
                'u_penerima' => $this->input->post('penerima')
            ];
            $options = array(
                'cluster' => 'ap1',
                'useTLS' => true
            );
            $pusher = new Pusher\Pusher(
                'cab0cc4b1d94c80dfc8e',
                '1ffe30e01f6b158b6ffa',
                '1122708',
                $options
            );
            if ($this->db->insert('chat', $data)) {
                // $push = $this->db->order_by('id', 'ASC')->get('chat')->result_array();
                $data['pengirim'] = $this->session->userdata('username');
                $penerima = $this->input->post('penerima');
                $push = $this->Chat_model->chatPerson($data['pengirim'], $penerima);

                foreach ($push as $key) {
                    $data_pusher[] = $key;
                }
                $pusher->trigger('my-channel', 'my-event', $data_pusher);
            }
            $data['title'] = 'Chat';
            $data['konseli'] = $this->User_model->getKonseliById($id);
            $data['konselor'] = $this->User_model->getKonselorById($id);

            // $data['pengirim'] = $this->session->userdata('username');
            // $penerima = $this->input->post('penerima');
            // // $data['penerima'] = $data['konselor'];
            $data['pengirim'] = $this->session->userdata('username');
            $penerima = $this->input->post('penerima');
            // menampung username/nik dari konselor yang dipilih
            // if ($this->input->post('nis')) {
            //     $data['penerima'] = $this->input->post('nis');
            //     $this->session->set_userdata('penerima', $data['penerima']);
            // } else {
            //     $data['penerima'] = $this->session->userdata('penerima');
            // }

            $data['chat'] = $this->Chat_model->chatPerson($data['pengirim'], $penerima);
            // $data['chat'] = $this->db->order_by('id', 'ASC')->get('chat')->result_array();
            $this->load->view('templates/header-landing', $data);
            $this->load->view('peges/chat', $data);
            $this->load->view('templates/footer-landing');
        }
    }
    public function profil($id)
    {
        $data['title'] = 'My Profil';
        $data['konselor'] = $this->User_model->getKonselorById($id);
        $data['konseli'] = $this->User_model->getKonseliById($id);
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/profile', $data);
        $this->load->view('templates/footer-landing');
    }
    public function edit($id)
    {
        $data['title'] = 'Edit Profil';
        $data['konselor'] = $this->User_model->getKonselorById($id);
        $data['konseli'] = $this->User_model->getKonseliById($id);
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/editProfil', $data);
        $this->load->view('templates/footer-landing');
    }
    public function pesan()
    {
        $data['title'] = 'Daftar Pesan';
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/kotakMasuk');
        $this->load->view('templates/footer-landing');
    }
    public function group()
    {
        $data['title'] = 'Chat Group';
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/pesanGroup');
        $this->load->view('templates/footer-landing');
    }
    public function invite()
    {
        $data['title'] = 'Invite';
        $this->load->view('templates/header-landing', $data);
        $this->load->view('peges/invite');
        $this->load->view('templates/footer-landing');
    }
}
