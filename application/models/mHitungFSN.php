<?php
defined('BASEPATH') or exit('No direct script access allowed');

class mHitungFSN extends CI_Model
{
    public function cek_produk($bulan, $tahun, $id_produk)
    {
        $data['periode'] = $this->db->query("SELECT * FROM variabel_item where month(periode)='" . $bulan . "' and year(periode)= '" . $tahun . "' and variabel_item.id_produk='" . $id_produk . "'")->row();
        return $data;
    }
    public function produk_variabel()
    {
        $this->db->select('*');
        $this->db->from('variabel_item');
        $this->db->join('produk', 'variabel_item.id_produk = produk.id_produk', 'left');
        $this->db->group_by('variabel_item.id_produk');
        return $this->db->get()->result();
    }
    public function detail_periode($id)
    {
        $this->db->select('*');
        $this->db->from('variabel_item');
        $this->db->join('produk', 'variabel_item.id_produk = produk.id_produk', 'left');
        $this->db->where('status!=0');
        $this->db->where('variabel_item.id_produk', $id);
        $data['variabel'] = $this->db->get()->result();
        $data['produk'] = $this->db->query("SELECT * FROM `produk` WHERE id_produk='" . $id . "'")->row();
        return $data;
    }
    //data create hitung
    public function periode($id)
    {
        $this->db->select('*');
        $this->db->from('variabel_item');
        $this->db->join('produk', 'variabel_item.id_produk = produk.id_produk', 'left');
        $this->db->where('status=0');
        $this->db->where('variabel_item.id_produk', $id);

        return $this->db->get()->result();
    }

    //mengamil data periode perhitungan
    public function variabel_periode($id)
    {
        $this->db->select('*');
        $this->db->from('variabel_item');
        $this->db->where('id_variabel', $id);
        return $this->db->get()->row();
    }

    //mengurangi bulann dari periode
    public function before_month($id)
    {
        $data['month'] = $this->db->query("SELECT id_variabel, DATE_SUB(periode, INTERVAL 1 MONTH) as pers_akhir FROM variabel_item WHERE id_variabel='" . $id . "'")->row();
        return $data;
    }

    //menambil data dari periode query diatas
    public function before_variabel($month, $year)
    {
        $variabel = $this->db->query("SELECT * FROM variabel_item where month(periode)='" . $month . "' and year(periode)= '" . $year . "'")->row();
        return $variabel;
    }
}

/* End of file mHitungFSN.php */
