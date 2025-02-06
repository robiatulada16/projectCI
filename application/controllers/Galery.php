<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galery extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('galery_model','galery');

        $this->load->helper(array('form', 'url','Cookie', 'String'));
        $this->load->library('form_validation');
        
        if ($this->session->userdata('id_user') == FALSE) {
            redirect(base_url("auth/login"));
        }
    }

    public function profil_dinas()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Profil Dinas'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data['profil'][0]['profile']);
        // die;
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/profil_Dinas',$data);
        $this->load->view('templates/footer');
    }

    public function edit_profil()
    {
        $this->form_validation->set_rules('profil', 'Profil', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Profil Dinas'
            ];

            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_profil',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $this->galery->UpdateProfil($id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/profil_Dinas');
        }
    }

    public function s_Dinas()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Struktur Dinas'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/s_Dinas',$data);
        $this->load->view('templates/footer');
    }

    public function edit_s_Dinas()
    {
        $this->form_validation->set_rules('s_Dinas', 'Struktur Dinas', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Struktur Dinas'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_s_Dinas',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $upload_sk = $_FILES['s_Dinas']['name'];
            
            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_sk) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
    
                $this->load->library('upload');
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('s_Dinas')) {
                    $old_sk = $data['galery']['s_Dinas'];
                    unlink(FCPATH . 'assets/galery/' . $old_sk);

                    $s_Dinas = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }else {
                $s_Dinas = $this->input->post('s_Dinas_old');
            }
            // var_dump($s_Dinas);
            // die;
            
            $this->galery->UpdateSDinas($s_Dinas,$id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/s_Dinas');
        }
        
    }

    public function s_Lembaga Dinas()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Struktur Lembaga Dinas'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/s_Lembaga Dinas',$data);
        $this->load->view('templates/footer');
    }

    public function edit_s_Lembaga Dinas()
    {
        $this->form_validation->set_rules('s_Lembaga Dinas', 'Struktur Lembaga Dinas', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Struktur Lembaga Dinas'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_s_Lembaga Dinas',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $upload_Lembaga Dinas = $_FILES['s_Lembaga Dinas']['name'];
            
            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_Lembaga Dinas) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
    
                $this->load->library('upload');
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('s_Lembaga Dinas')) {
                    $old_Lembaga Dinas = $data['galery']['s_Lembaga Dinas'];
                    unlink(FCPATH . 'assets/galery/' . $old_Lembaga Dinas);

                    $s_Lembaga Dinas = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }else {
                $s_Lembaga Dinas = $this->input->post('s_Lembaga Dinas_old');
            }
            // var_dump($s_Lembaga Dinas);
            // die;
            
            $this->galery->UpdateSLembaga Dinas($s_Lembaga Dinas,$id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/s_Lembaga Dinas');
        }
        
    }

    public function s_Pegawai Dinas()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Struktur Pegawai Dinas'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/s_Pegawai Dinas',$data);
        $this->load->view('templates/footer');
    }

    public function edit_s_Pegawai Dinas()
    {
        $this->form_validation->set_rules('s_Pegawai Dinas', 'Struktur Pegawai Dinas', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Struktur Pegawai Dinas'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_s_Pegawai Dinas',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $upload_Pegawai Dinas = $_FILES['s_Pegawai Dinas']['name'];
            
            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_Pegawai Dinas) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
    
                $this->load->library('upload');
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('s_Pegawai Dinas')) {
                    $old_Pegawai Dinas = $data['galery']['s_Pegawai Dinas'];
                    unlink(FCPATH . 'assets/galery/' . $old_Pegawai Dinas);

                    $s_Pegawai Dinas = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }else {
                $s_Pegawai Dinas = $this->input->post('s_Pegawai Dinas_old');
            }
            // var_dump($s_Pegawai Dinas);
            // die;
            
            $this->galery->UpdateSPegawai Dinas($s_Pegawai Dinas,$id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/s_Pegawai Dinas');
        }
        
    }

    public function s_pemuda()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Struktur Pemuda Dinas'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/s_pemuda',$data);
        $this->load->view('templates/footer');
    }

    public function edit_s_pemuda()
    {
        $this->form_validation->set_rules('s_pemuda', 'Struktur Pemuda Dinas', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Struktur Pemuda Dinas'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_s_pemuda',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $upload_pemuda = $_FILES['s_pemuda']['name'];
            
            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_pemuda) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
    
                $this->load->library('upload');
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('s_pemuda')) {
                    $old_pemuda = $data['galery']['s_pemuda'];
                    unlink(FCPATH . 'assets/galery/' . $old_pemuda);

                    $s_pemuda = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }else {
                $s_pemuda = $this->input->post('s_pemuda_old');
            }
            // var_dump($s_pemuda);
            // die;
            
            $this->galery->UpdateSPemuda($s_pemuda,$id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/s_pemuda');
        }
        
    }

    public function rt_rw()
    {
        $data['profil'] = $this->galery->profil();
        $judul = [
            'title' => 'Galery',
            'sub_title' => 'Ketua RT & RW'
        ];

        // $data['sm'] = $this->db->get('surat_masuk')->row_array();
        // var_dump($data);
        $this->load->view('templates/header', $judul);
        $this->load->view('galery/rt_rw',$data);
        $this->load->view('templates/footer');
    }
    public function edit_k_rtrw()
    {
        $this->form_validation->set_rules('k_rtrw', 'Ketua RT & RW', 'trim');

        if ($this->form_validation->run() == false) {
            $data['profil'] = $this->galery->profil();
            $judul = [
                'title' => 'Galery',
                'sub_title' => 'Ketua RT & RW'
            ];

            // $data['sm'] = $this->db->get('surat_masuk')->row_array();
            // var_dump($data);
            $this->load->view('templates/header', $judul);
            $this->load->view('galery/edit_k_rtrw',$data);
            $this->load->view('templates/footer');
        }else{
            $id = $this->uri->segment(3);
            $upload_rtrw = $_FILES['k_rtrw']['name'];
            
            $data['galery'] = $this->db->get_where('gallery', ['id' => $id])->row_array();

            if ($upload_rtrw) {
                $config['upload_path']          = './assets/galery/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2048; // 1MB
                // $config['max_width']            = 1024;
                // $config['max_height']           = 768;
    
                $this->load->library('upload');
                $this->upload->initialize($config);
    
                if ($this->upload->do_upload('k_rtrw')) {
                    $old_rtrw = $data['galery']['k_rtrw'];
                    unlink(FCPATH . 'assets/galery/' . $old_rtrw);

                    $k_rtrw = $this->upload->data('file_name');
                } else {
                    echo $this->upload->display_errors();
                }
            }else {
                $k_rtrw = $this->input->post('k_rtrw_old');
            }
            // var_dump($k_rtrw);
            // die;
            
            $this->galery->UpdateSrtrw($k_rtrw,$id);
            $this->session->set_flashdata('success', 'Berhasil Di Update!');
            redirect('galery/rt_rw');
        }
        
    }

}
