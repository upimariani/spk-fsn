<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukMasuk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProdukMasuk');
        $this->load->model('mHitungFSN');
    }

    public function index()
    {
        $data = array(
            'produk_masuk' => $this->mProdukMasuk->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/ProdukMasuk/produkMasuk', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {

        $this->form_validation->set_rules('produk', 'Produk', 'required');
        $this->form_validation->set_rules('qty', 'Quantity', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'produk' => $this->mProdukMasuk->produk()
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/navbar');
            $this->load->view('Admin/Layout/aside');
            $this->load->view('Admin/ProdukMasuk/createProdukMasuk', $data);
            $this->load->view('Admin/Layout/footer');
        } else {

            $data = array(
                'id_user' => $this->session->userdata('id'),
                'id_produk' => $this->input->post('produk'),
                'tgl_masuk' => $this->input->post('tgl'),
                'qty_masuk' => $this->input->post('qty')
            );
            $this->mProdukMasuk->insert($data);


            $id = $this->input->post('produk');
            $tanggal = $this->input->post('tgl');
            $pecah_tgl = explode("-", $tanggal);
            $tahun = $pecah_tgl[0];
            $bln = $pecah_tgl[1];

            $data = $this->mHitungFSN->cek_produk($bln, $tahun, $id);

            if ($data['periode']) {
                //jika ada
                $periode = $data['periode']->periode;
                $id_variabel = $data['periode']->id_variabel;
                $penerimaan_sblm = $data['periode']->penerimaan;
                $qty_masuk = $this->input->post('qty');
                $penerimaan = $penerimaan_sblm + $qty_masuk;

                $data_variabel = array(
                    'penerimaan' => $penerimaan
                );
                $this->db->where('id_variabel', $id_variabel);
                $this->db->update('variabel_item', $data_variabel);
            } else {
                //jika tidak ada
                $data_variabel = array(
                    'id_produk' => $this->input->post('produk'),
                    'penerimaan' => $this->input->post('qty'),
                    'periode' => $this->input->post('tgl')
                );
                $this->db->insert('variabel_item', $data_variabel);
            }
            $this->session->set_flashdata('success', 'Data Produk Masuk Berhasil Disimpan!');
            redirect('Admin/cProdukMasuk');
        }
    }
}

/* End of file cProdukMasuk.php */
