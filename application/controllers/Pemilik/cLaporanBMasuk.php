<?php
defined('BASEPATH') or exit('No direct script access allowed');

class claporanBMasuk extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }

    public function index()
    {
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/LaporanBarangMasuk/vLaporan');
        $this->load->view('Pemilik/Layout/footer');
    }
    public function hari()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'masuk' => $this->mLaporan->lap_masuk($tanggal, $bulan, $tahun)
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/LaporanBarangMasuk/vLaporanhari', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
    public function bulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'masuk' => $this->mLaporan->lap_masuk_bulan($bulan, $tahun)
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/LaporanBarangMasuk/vLaporanbulan', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
}

/* End of file claporanBMasuk.php */
