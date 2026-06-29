<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('berita_model', 'M_Berita');
    }

    public function index()
    {
        $data['header'] = 'Dashboard';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/asset/footer');
    }
    public function berita()
    {
        $data['header'] = 'Berita';
        $data['berita_list'] = $this->M_Berita->get_all(10);
        $data['total_berita'] = $this->M_Berita->count_all();
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/berita', $data);
        $this->load->view('admin/asset/footer');
    }

    public function berita_form()
    {
        $data['header'] = 'Tambah Berita';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/berita_form');
        $this->load->view('admin/asset/footer');
    }

    public function simpan_berita()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul Berita', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal Publikasi', 'required');
        $this->form_validation->set_rules('isi_berita', 'Isi Berita', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/berita_form');
            return;
        }

        // upload gambar
        $upload_path = './assets/img/berita/';
        if (!is_dir($upload_path)) {
            mkdir($upload_path, 0777, TRUE);
        }

        $config['upload_path'] = $upload_path;
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = 5120;
        $this->load->library('upload', $config);
           //upload gambar jika ada
           if (!empty($_FILES['gambar']['name'])) {
               if ($this->upload->do_upload('gambar')) {
                   $upload_data = $this->upload->data();
               } else {
                   $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
                   redirect('admin/berita_form');
                   return;
               }
           }

    
        $data = array(
            'judul' => $this->input->post('judul', TRUE),
            'kategori' => $this->input->post('kategori', TRUE),
            'tanggal' => $this->input->post('tanggal', TRUE),
            'isiberita' => $this->input->post('isi_berita', FALSE),
            'status' => 'published',
            'gambar' => $upload_data['file_name']
        );

        print_r($data);

        if ($this->M_Berita->simpan($data)) {
            $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
            redirect('admin/berita_form');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan berita.');
            redirect('admin/berita_form');
        }

        redirect('admin/berita');
    }

    public function profil()
    {
        $data['header'] = 'Profil';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/profil');
        $this->load->view('admin/asset/footer');
    }
    public function pesan()
    {
        $data['header'] = 'Pesan';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/pesan');
        $this->load->view('admin/asset/footer');
    }
}
