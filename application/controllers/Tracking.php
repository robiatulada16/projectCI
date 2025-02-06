<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Tracking extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->helper(array('form', 'url', 'cookie', 'string'));
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Tracking',
            'sub_title' => ''
        ];

        $settings = [
            'judul_halaman' => 'My Website',
            'desc_web' => 'Deskripsi singkat tentang website ini.',
            'alamat' => 'Jl. Contoh Alamat, No. 123, Kota ABC',
            'phone' => '+62 812 3456 7890',
            'email' => 'email@example.com',
            'twitter' => 'https://twitter.com/example',
            'facebook' => 'https://facebook.com/example',
            'instagram' => 'https://instagram.com/example'
        ];

        $this->load->view('page/templates/head2');
        $this->load->view('page/templates/tracking');
        $this->load->view('page/templates/footer2', compact('settings'));
    }

    public function cari()
    {
        $id = $this->input->post('trackid', TRUE);
        $row = $this->pengajuan_track->findById($id);

        if ($row === null) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><h5><i class="icon fas fa-bank"></i> Maaf!</h5> ID yang anda masukkan Salah! <b>ID: </b><b>' . $id . '</b> <i>tidak ditemukan</i></div>');
            redirect(base_url("tracking"));
        } else {
            redirect(base_url("tracking/tracked/") . $id);
        }
    }

    public function tracked()
    {
        $id = $this->uri->segment(3);
        $row = $this->pengajuan_track->showById($id);
    
        if (!is_array($row) || empty($row)) {
            $this->session->set_flashdata('message', '<div class="alert alert-warning">Data tidak ditemukan.</div>');
            redirect(base_url("tracking"));
            return;
        }
    
        $data = [
            'id' => $id,
            'row' => $row ?? [], // Pastikan $row selalu ada
            'options' => [
                'SPKK' => 'PKL',
                'SPNA' => 'MAGANG',
            ],
            'judul' => [
                'title' => 'Tracking',
                'sub_title' => ''
            ],
            'settings' => [
                'judul_halaman' => 'My Website',
                'desc_web' => 'Deskripsi singkat tentang website ini.',
                'alamat' => 'Jl. Contoh Alamat, No. 123, Kota ABC',
                'phone' => '+62 812 3456 7890',
                'email' => 'email@example.com',
                'twitter' => 'https://twitter.com/example',
                'facebook' => 'https://facebook.com/example',
                'instagram' => 'https://instagram.com/example'
            ]
        ];
    
        $this->load->view('page/templates/head2', $data);
        $this->load->view('page/templates/result', $data);
        $this->load->view('page/templates/footer2', $data);
    }
}