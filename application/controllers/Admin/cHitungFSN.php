<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHitungFSN extends CI_Controller
{

    public function index()
    {
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/FSN/fsn');
        $this->load->view('Admin/Layout/footer');
    }
}

/* End of file cHitungFSN.php */
