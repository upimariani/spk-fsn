<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukKeluar extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProdukKeluar');
        $this->load->model('mHitungFSN');
    }

    public function index()
    {
        $data = array(
            'produk_keluar' => $this->mProdukKeluar->select(),
            'produk_masuk' => $this->mProdukKeluar->produk_masuk()

        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/ProdukKeluar/produkKeluar', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('produk_masuk', 'Produk', 'required');
        $this->form_validation->set_rules('tgl_masuk', 'Tanggal Masuk', 'required');
        $this->form_validation->set_rules('qty_masuk', 'Quantity Masuk', 'required');
        $this->form_validation->set_rules('tgl_keluar', 'Tanggal Keluar', 'required');
        $this->form_validation->set_rules('qty_keluar', 'Quantity Keluar', 'required');


        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'produk_masuk' => $this->mProdukKeluar->produk_masuk()
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/navbar');
            $this->load->view('Admin/Layout/aside');
            $this->load->view('Admin/ProdukKeluar/createProdukKeluar', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            // masuk tabel produk keluar
            $data = array(
                'id_prod_masuk' => $this->input->post('produk_masuk'),
                'tgl_keluar' => $this->input->post('tgl_keluar'),
                'qty_keluar' => $this->input->post('qty_keluar')
            );
            $this->mProdukKeluar->insert($data);

            // update stok barang masuk
            $produk_masuk = $this->input->post('produk_masuk');
            $qty_masuk = $this->input->post('qty_masuk');
            $qty_keluar = $this->input->post('qty_keluar');
            $qty = $qty_masuk - $qty_keluar;

            $stok = array(
                'qty_masuk' => $qty
            );
            $this->mProdukKeluar->stok($produk_masuk, $stok);

            //variabel item pengeluaran
            $produk = $this->input->post('produk');
            $tgl_keluar = $this->input->post('tgl_keluar');
            $pecah_tgl = explode("-", $tgl_keluar);
            $tahun = $pecah_tgl[0];
            $bln = $pecah_tgl[1];

            $cek = $this->mHitungFSN->cek_produk($bln, $tahun, $produk);
            if ($cek['periode']) {
                $pengeluaran_seb = $cek['periode']->pengeluaran;
                $qty_keluar = $this->input->post('qty_keluar');

                $pengeluaran = $pengeluaran_seb + $qty_keluar;

                $data_variabel = array(
                    'pengeluaran' => $pengeluaran
                );
                $this->mProdukKeluar->variabel_pengeluaran($cek['periode']->id_variabel, $data_variabel);
            } else {
                $data = array(
                    'periode' => $tgl_keluar,
                    'id_produk' => $produk,
                    'pengeluaran' => $this->input->post('qty_keluar')
                );
                $this->mProdukKeluar->insert_variabel($data);
            }
            $this->session->set_flashdata('success', 'Data Produk Keluar Berhasil Disimpan!');
            redirect('Admin/cProdukKeluar');
        }
    }
    public function update($id)
    {
        $data = array(
            'qty_keluar' => $this->input->post('qty_keluar')
        );
        $this->db->where('id_prod_keluar', $id);
        $this->db->update('produk_keluar', $data);
        $this->session->set_flashdata('success', 'Data Produk Keluar Berhasil Diperbaharui!');
        redirect('Admin/cProdukKeluar');
    }
    public function delete($id)
    {
        $this->db->where('id_prod_keluar', $id);
        $this->db->delete('produk_keluar');
        $this->session->set_flashdata('success', 'Data Produk Keluar Berhasil Dihapus!');
        redirect('Admin/cProdukKeluar');
    }
}

/* End of file cProdukKeluar.php */
