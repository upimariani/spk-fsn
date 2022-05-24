<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mProdukKeluar extends CI_Model
{
    public function produk_masuk()
    {
        $this->db->select('*');
        $this->db->from('produk_masuk');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('qty_masuk!=0');
        return $this->db->get()->result();
    }
    public function insert($data)
    {
        $this->db->insert('produk_keluar', $data);
    }
    //update stok produk masuk
    public function stok($id, $data)
    {
        $this->db->where('id_prod_masuk', $id);
        $this->db->update('produk_masuk', $data);
    }

    //update variabel
    public function variabel_pengeluaran($id, $data)
    {
        $this->db->where('id_variabel', $id);
        $this->db->update('variabel_item', $data);
    }
    //simpan variabel
    public function insert_variabel($data)
    {
        $this->db->insert('variabel_item', $data);
    }

    public function select()
    {
        $this->db->select('*');
        $this->db->from('produk_keluar');
        $this->db->join('produk_masuk', 'produk_keluar.id_prod_masuk = produk_masuk.id_prod_masuk', 'left');
        $this->db->join('produk', 'produk.id_produk = produk_masuk.id_produk', 'left');
        return $this->db->get()->result();
    }
}

/* End of file mProdukKeluar.php */
