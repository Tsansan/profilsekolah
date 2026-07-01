<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function simpan($data)
    {
        $data['created_at'] = date('Y-m-d H:i:s');
        return $this->db->insert('berita', $data); 
        // return print_r($data);
    }

    public function get_all($limit = 10, $offset = 0, $kategori = '', $sort = 'newest')
    {
        // Apply category filter
        if (!empty($kategori) && $kategori !== 'all') {
            $this->db->where('kategori', $kategori);
        }

        // Apply sorting
        switch ($sort) {
            case 'oldest':
                $this->db->order_by('created_at', 'ASC');
                break;
            case 'title':
                $this->db->order_by('judul', 'ASC');
                break;
            default: // newest
                $this->db->order_by('created_at', 'DESC');
        }

        $this->db->limit($limit, $offset);
        return $this->db->get('berita')->result();
    }

    public function get_by_id($id)
    {
        return $this->db->get_where('berita', ['idberita' => $id])->row();
    }

    public function count_all($data=[], $kategori = '')
    {
        if (isset($data['status'])) {
            $this->db->where('status', $data['status']);
        }
        
        // Apply category filter for count
        if (!empty($kategori) && $kategori !== 'all') {
            $this->db->where('kategori', $kategori);
        }
        
        return $this->db->count_all_results('berita');
    }
    
    public function get_last_week()
    {
        $this->db->where('created_at >=', date('Y-m-d H:i:s', strtotime('-1 week')));
        return $this->db->get('berita')->result();
    }

    public function delete($id)
    {
        $this->db->where('idberita', $id);
        return $this->db->delete('berita');
    }

    public function update($id, $data)
    {
        $this->db->where('idberita', $id);
        return $this->db->update('berita', $data);
    }
}
