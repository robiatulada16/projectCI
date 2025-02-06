<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FormController extends CI_Controller {
    public function index() {
        // Definisi variabel $settings
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

        // Memuat view dan mengirimkan data $settings
        $this->load->view('page/templates/head2');
        $this->load->view('page/templates/form_view');
        $this->load->view('page/templates/footer2', compact('settings'));
    }
}
