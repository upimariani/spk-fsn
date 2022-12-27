<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProdukMasuk extends CI_Model
{
    public function produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('produk_masuk', $data);
    }
    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk_masuk');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('qty_masuk!=0');
        return $this->db->get()->result();
    }
    public function delete($id)
    {
        $this->db->where('id_prod_masuk', $id);
        $this->db->delete('produk_masuk');
    }
}

/* End of file mProdukMasuk.php */
