<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukKeluar extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/ProdukKeluar/produkKeluar');
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cProdukKeluar.php */
