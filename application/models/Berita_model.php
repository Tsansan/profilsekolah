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

    public function get_all($limit)
    {
        $this->db->order_by('created_at', 'DESC');
        $this->db->limit($limit);
        return $this->db->get('berita')->result();
    }

    public function count_all()
    {
        return $this->db->count_all('berita');
    }
}
