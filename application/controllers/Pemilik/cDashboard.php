<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cDashboard extends CI_Controller
{

    public function index()
    {
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/dashboard');
        $this->load->view('Pemilik/Layout/footer');
    }
}

/* End of file cDashboard.php */
