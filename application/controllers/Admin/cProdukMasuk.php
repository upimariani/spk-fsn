<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProdukMasuk extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/ProdukMasuk/produkMasuk');
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/ProdukMasuk/createProdukMasuk');
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cProdukMasuk.php */
