<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/asset/sidebar');
        $this->load->view('admin/asset/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/asset/footer');
    }
    public function berita()
    {
        $this->load->view('admin/asset/sidebar');
        $this->load->view('admin/asset/header');
        $this->load->view('admin/berita');
        $this->load->view('admin/asset/footer');
    }
    public function profil()
    {
        $this->load->view('admin/asset/sidebar');
        $this->load->view('admin/asset/header');
        $this->load->view('admin/profil');
        $this->load->view('admin/asset/footer');
    }
    public function pesan()
    {
        $this->load->view('admin/asset/sidebar');
        $this->load->view('admin/asset/header');
        $this->load->view('admin/pesan');
        $this->load->view('admin/asset/footer');
    }
}
