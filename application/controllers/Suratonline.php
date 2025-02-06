<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suratonline extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();

        // Load model yang digunakan
        $this->load->model('galery_model', 'galery');
        $this->load->model('pengajuan_track_model', 'pengajuan_track');
        $this->load->model('M_Penduduk', 'penduduk');

        // Load helper dan library
        $this->load->helper(['form', 'url', 'cookie', 'string']);
        $this->load->library('form_validation');
    }

    public function index()
    {
        // Data untuk tampilan
        $data['profil'] = $this->galery->profil();
        $data['settings'] = [
            'judul_halaman' => 'Pengajuan Surat Online',
            'desc_web' => 'Platform untuk mempermudah pengajuan surat secara online.',
            'alamat' => 'Jl. Contoh Alamat No. 123, Kota Contoh',
            'phone' => '081234567890',
            'email' => 'admin@contoh.com',
            'twitter' => 'https://twitter.com',
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
        ];

        // Pilihan jenis surat
        $data['options'] = [
            'Pilih',
            'Jenis Penelitian:' => [
                'SPKK' => 'PKL',
                'SPNA' => 'Magang',
            ],
        ];

        // Load view
        $this->load->view('page/templates/head2', $data['settings']);
        $this->load->view('page/templates/s_online', $data);
        $this->load->view('page/templates/footer2', $data);
    }

    public function ajukan()
    {
        // Status pengajuan
        $status = [
            1 => 'Pending',
            2 => 'Diterima dan Dilanjutkan',
            3 => 'Sudah Diketik dan Diparaf',
            4 => 'Sudah Ditandatangani Lurah dan Selesai',
        ];

        // Ambil data dari input form
        $nama = $this->input->post('nama', TRUE);
        $nik = $this->input->post('nik', TRUE);
        $no_hp = $this->input->post('no_hp', TRUE);
        $jenis_surat = $this->input->post('jenis_surat', TRUE);

        // Validasi NIK
        $ceknik = $this->penduduk->cek_penduduk($nik)->num_rows();
        if ($ceknik <= 0) {
            // Tambahkan data penduduk jika NIK tidak ditemukan
            $this->db->insert('penduduk', [
                'asal_sekolah' => $asal_sekolah,
                'jurusan' => $jurusan,
                'tanggal' => date('Y-m-d'),
            ' no_hp' => $no_hp,
            ]);
        }

        // Generate ID surat
        $id = $jenis_surat . "-" . uniqid() . rand(100, 999);

        // Proses file upload
        $file = '-'; // Default jika tidak ada file diunggah
        if (!empty($_FILES['file']['name'])) {
            $namafile = substr($_FILES['file']['name'], -7); // Potong nama file
            $file = $jenis_surat . uniqid() . $namafile;

            // Konfigurasi upload
            $config['upload_path'] = './uploads/berkas';
            $config['allowed_types'] = 'pdf'; // Batasi hanya PDF
            $config['max_size'] = 5120; // Maksimal 5MB
            $config['file_name'] = $file;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload("file")) {
                // Jika upload gagal
                $this->session->set_flashdata('error', '<div class="alert alert-warning">Gagal mengunggah file. Pastikan file tidak melebihi 5MB dan format PDF.</div>');
                redirect(base_url("suratonline"));
                return;
            }
        }

        // Simpan data pengajuan ke database
        $data = [
            'asal_sekolah' => $asal_sekolah,
            'jurusan' => $jurusan,
            'tanggal' => date('Y-m-d'),
            'no_hp' => $no_hp,
            'pilih pengajuan' => $pilh_pengajuan,
            'file' => $file,
            'status' => 1, // Pending
        ];

        $this->pengajuan_track->insert_p_surat($data);

        // Tampilkan pesan sukses
        $this->session->set_flashdata('success', '<div class="alert alert-success">Berhasil Mengajukan Surat! ID Anda: <b>' . $id . '</b></div>');
        redirect(base_url("suratonline"));
    }
}
