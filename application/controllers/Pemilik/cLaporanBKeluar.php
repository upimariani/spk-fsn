<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanBKeluar extends CI_Controller
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
        $this->load->view('Pemilik/LaporanBarangKeluar/vLaporan');
        $this->load->view('Pemilik/Layout/footer');
    }
    public function hari()
    {
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'keluar' => $this->mLaporan->lap_keluar($tanggal, $bulan, $tahun)
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/LaporanBarangKeluar/vLaporanhari', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
    public function bulan()
    {
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');

        $data = array(
            'keluar' => $this->mLaporan->lap_keluar_bulan($bulan, $tahun)
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/LaporanBarangKeluar/vLaporanbulan', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
}

/* End of file cLaporanBKeluar.php */
