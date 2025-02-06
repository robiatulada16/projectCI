<?php

class Alur_magang extends CI_Controller
{
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $judul = [
            'title' => 'Alur Magang',
            'sub_title' => ''
        ];

        // Definisikan variabel $settings
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

        // Mengirim data ke view menggunakan array $data
        $data = compact('judul', 'settings');

        $this->load->view('page/templates/head2', $data);
        $this->load->view('page/templates/alur_magang', $data);
        $this->load->view('page/templates/footer2', $data);
    }
}
