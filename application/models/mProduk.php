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

    public function edit($id)
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->where('id_produk', $id);
        return $this->db->get()->row();
    }
    public function update($id, $data)
    {
        $this->db->where('id_produk', $id);
        $this->db->update('produk', $data);
    }
    public function delete($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }
}

/* End of file mProduk.php */
