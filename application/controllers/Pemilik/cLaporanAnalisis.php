<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cLaporanAnalisis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }

    public function index()
    {

        $data = array(
            'analisis' => $this->mLaporan->analisis()
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/Laporan/vLaporanAnalisis', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
}

/* End of file cLaporanAnalisis.php */
