<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProduk extends CI_Model
{
    //insert tabel produk
    public function insert($data)
    {
        $this->db->insert('produk', $data);
    }

    //insert tabel variabel item
    public function variabel($data)
    {
        $this->db->insert('variabel_item', $data);
    }

    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->result();
    }
}

/* End of file mProduk.php */
