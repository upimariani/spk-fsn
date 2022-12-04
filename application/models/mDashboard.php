<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mDashboard extends CI_Model
{
    public function jml()
    {
        $data['produk'] = $this->db->query("SELECT COUNT(id_produk) as jml_produk FROM `produk`")->row();
        $data['produk_masuk'] = $this->db->query("SELECT COUNT(id_prod_masuk) as jml_masuk FROM `produk_masuk`")->row();
        $data['produk_keluar'] = $this->db->query("SELECT COUNT(id_prod_keluar) as jml_keluar FROM `produk_keluar`")->row();
        return $data;
    }
}

/* End of file mDashboard.php */
