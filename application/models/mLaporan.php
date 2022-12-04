<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mLaporan extends CI_Model
{
    public function lap_masuk($tanggal, $bulan, $tahun)
    {

        $this->db->select('*');
        $this->db->from('produk_masuk');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('DAY(tgl_masuk)', $tanggal);
        $this->db->where('MONTH(tgl_masuk)', $bulan);
        $this->db->where('YEAR(tgl_masuk)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_masuk_bulan($bulan, $tahun)
    {

        $this->db->select('*');
        $this->db->from('produk_masuk');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('MONTH(tgl_masuk)', $bulan);
        $this->db->where('YEAR(tgl_masuk)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_keluar($tanggal, $bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('produk_keluar');
        $this->db->join('produk_masuk', 'produk_masuk.id_prod_masuk = produk_keluar.id_prod_masuk', 'left');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('DAY(tgl_keluar)', $tanggal);
        $this->db->where('MONTH(tgl_keluar)', $bulan);
        $this->db->where('YEAR(tgl_keluar)', $tahun);
        return $this->db->get()->result();
    }
    public function lap_keluar_bulan($bulan, $tahun)
    {
        $this->db->select('*');
        $this->db->from('produk_keluar');
        $this->db->join('produk_masuk', 'produk_masuk.id_prod_masuk = produk_keluar.id_prod_masuk', 'left');
        $this->db->join('produk', 'produk_masuk.id_produk = produk.id_produk', 'left');
        $this->db->where('MONTH(tgl_keluar)', $bulan);
        $this->db->where('YEAR(tgl_keluar)', $tahun);
        return $this->db->get()->result();
    }
    public function analisis()
    {
        return $this->db->query("SELECT MAX(periode) as periode, nama_produk, pers_awal, penerimaan, pengeluaran, pers_akhir, status FROM `variabel_item` JOIN produk ON variabel_item.id_produk=produk.id_produk WHERE status !='0' GROUP BY variabel_item.id_produk")->result();
    }

    public function grafik_analisis()
    {
        return $this->db->query("SELECT COUNT(id_variabel) as jml, status FROM `variabel_item`  WHERE status != '0' GROUP BY status")->result();
    }
}

/* End of file mLaporan.php */
