<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cGrafikAnalisis extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mLaporan');
    }


    public function index()
    {
        $data = array(
            'grafik_status' => $this->mLaporan->grafik_analisis()
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/AnalisisGrafik/vAnalisisGrafik', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
}

/* End of file cGrafikAnalisis.php */
