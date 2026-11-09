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
        $data['title'] = 'Dashboard';
        $data['total_berita'] = $this->M_Berita->count_all();
        $data['berita'] = $this->M_Berita->get_all(10, 0, '', 'newest');

        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/asset/footer');
    }
    public function berita()
    {
        $data['title'] = 'Berita';
        $data['total_berita'] = $this->M_Berita->count_all();
        $data['berita_draft'] = $this->M_Berita->count_all(['status' => 'draft']);
        $data['berita_published'] = $this->M_Berita->count_all(['status' => 'published']);
        $data['last_week_berita'] = $this->M_Berita->get_last_week();

        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/berita', $data);
        $this->load->view('admin/asset/footer');
    }

    public function get_berita_ajax()
    {
        $page = $this->input->get('page') ?? 1;
        $kategori = $this->input->get('kategori') ?? '';
        $sort = $this->input->get('sort') ?? 'newest';
        $per_page = 10;
        $offset = ($page - 1) * $per_page;
        
        $berita_list = $this->M_Berita->get_all($per_page, $offset, $kategori, $sort);
        $total_berita = $this->M_Berita->count_all([], $kategori);
        $total_pages = ceil($total_berita / $per_page);
        
        // Ensure page doesn't exceed total pages
        if ($page > $total_pages && $total_pages > 0) {
            $page = $total_pages;
            $offset = ($page - 1) * $per_page;
            $berita_list = $this->M_Berita->get_all($per_page, $offset, $kategori, $sort);
        }
        
        $response = array(
            'status' => 'success',
            'data' => $berita_list,
            'total_berita' => $total_berita,
            'total_pages' => $total_pages,
            'current_page' => (int)$page
        );
        
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function berita_form()
    {
        $data['title'] = 'Tambah Berita';
        $id = $this->input->get('id');
        if ($id) {
            $data['berita'] = $this->M_Berita->get_by_id($id);
            # Set flashdata for form fields if berita exists
           
            if ($data['berita']) {
                $this->session->set_flashdata('judul', $data['berita']->judul);
                $this->session->set_flashdata('kategori', $data['berita']->kategori);
                $this->session->set_flashdata('tanggal', $data['berita']->tanggal);
                $this->session->set_flashdata('isiberita', $data['berita']->isiberita);
                $this->session->set_flashdata('gambar', $data['berita']->gambar);
                $this->session->set_flashdata('idberita', $data['berita']->idberita);
            }
        }
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

        if ($this->input->post('idberita')) {
            $id = $this->input->post('idberita');
            $data = array(
                'judul' => $this->input->post('judul', TRUE),
                'kategori' => $this->input->post('kategori', TRUE),
                'tanggal' => $this->input->post('tanggal', TRUE),
                'isiberita' => $this->input->post('isi_berita', FALSE),
                'status' => $this->input->post('status', TRUE)
            );

            // Check if a new image is uploaded
            if (!empty($_FILES['gambar']['name'])) {
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

                if ($this->upload->do_upload('gambar')) {
                    $upload_data = $this->upload->data();
                    $data['gambar'] = $upload_data['file_name'];
                } else {
                    $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
                    redirect('admin/berita_form?id=' . $id);
                    return;
                }
            }

            if ($this->M_Berita->update($id, $data)) {
                $this->session->set_flashdata('success', 'Berita berhasil diperbarui.');
                redirect('admin/berita');
            } else {
                $this->session->set_flashdata('error', 'Gagal memperbarui berita.');
                redirect('admin/berita_form?id=' . $id);
            }
        }

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
            'status' => $this->input->post('status', TRUE),
            'gambar' => $upload_data['file_name']
        );

        print_r($data);

        if ($this->M_Berita->simpan($data)) {
            $this->session->set_flashdata('success', 'Berita berhasil disimpan.');
            redirect('admin/berita');
        } else {
            $this->session->set_flashdata('error', 'Gagal menyimpan berita.');
            redirect('admin/berita_form');
        }

    }

    public function delete_berita()
    {
        $id = $this->input->post('id');
        
        if (!$id) {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'ID tidak ditemukan']);
            return;
        }

        // Get berita data to get image filename
        $berita = $this->M_Berita->get_by_id($id);
        
        if ($berita) {
            // Delete image if exists
            if ($berita->gambar && file_exists('./assets/img/berita/' . $berita->gambar)) {
                unlink('./assets/img/berita/' . $berita->gambar);
            }

            // Delete from database
            if ($this->M_Berita->delete($id)) {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'success', 'message' => 'Berita berhasil dihapus']);
            } else {
                header('Content-Type: application/json');
                echo json_encode(['status' => 'error', 'message' => 'Gagal menghapus berita']);
            }
        } else {
            header('Content-Type: application/json');
            echo json_encode(['status' => 'error', 'message' => 'Berita tidak ditemukan']);
        }
    }

    public function profil()
    {
        $data['title'] = 'Profil';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/profil');
        $this->load->view('admin/asset/footer');
    }

    Public function profil_update()
    {
        print_r($this->input->post());
        $this->load->library('form_validation');
        $this->form_validation->set_rules('sejarah', 'Sejarah Sekolah', 'required');
        $this->form_validation->set_rules('visi', 'Visi Sekolah', 'required');
        $this->form_validation->set_rules('misi', 'Misi Sekolah', 'required');

        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('admin/profil');
            return;
        }

        $data = array(
            'sejarah' => $this->input->post('sejarah', FALSE),
            'visi' => $this->input->post('visi', FALSE),
            'misi' => $this->input->post('misi', FALSE)
        );

        if ($this->M_Berita->update_profil($data)) {
            $this->session->set_flashdata('success', 'Profil berhasil diperbarui.');
            redirect('admin/profil');
        } else {
            $this->session->set_flashdata('error', 'Gagal memperbarui profil.');
            redirect('admin/profil');
        }
    }


    public function pesan()
    {
        $data['title'] = 'Pesan';
        $this->load->view('admin/asset/sidebar', $data);
        $this->load->view('admin/asset/header');
        $this->load->view('admin/pesan');
        $this->load->view('admin/asset/footer');
    }
}
