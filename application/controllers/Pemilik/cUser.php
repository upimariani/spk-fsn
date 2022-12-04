<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cUser extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mUser');
    }


    public function index()
    {
        $data = array(
            'user' => $this->mUser->select()
        );
        $this->load->view('Pemilik/Layout/head');
        $this->load->view('Pemilik/Layout/navbar');
        $this->load->view('Pemilik/Layout/aside');
        $this->load->view('Pemilik/User/vUser', $data);
        $this->load->view('Pemilik/Layout/footer');
    }
    public function createUser()
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('alamat', 'Nama Produk', 'required');
        $this->form_validation->set_rules('no_hp', 'Nama Produk', 'required');
        $this->form_validation->set_rules('username', 'Nama Produk', 'required');
        $this->form_validation->set_rules('password', 'Nama Produk', 'required');
        $this->form_validation->set_rules('level', 'Nama Produk', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Pemilik/Layout/head');
            $this->load->view('Pemilik/Layout/navbar');
            $this->load->view('Pemilik/Layout/aside');
            $this->load->view('Pemilik/User/vCreateUser');
            $this->load->view('Pemilik/Layout/footer');
        } else {
            $data = array(
                'nama_user' => $this->input->post('nama'),
                'alamat' => $this->input->post('alamat'),
                'no_hp' => $this->input->post('no_hp'),
                'username'  => $this->input->post('username'),
                'password' => $this->input->post('password'),
                'level_user' => $this->input->post('level'),
            );
            $this->mUser->insert($data);
            $this->session->set_flashdata('success', 'Data User Berhasil Disimpan!!');
            redirect('Pemilik/cUser');
        }
    }
    public function update($id)
    {
        $data = array(
            'nama_user' => $this->input->post('nama'),
            'alamat' => $this->input->post('alamat'),
            'no_hp' => $this->input->post('no_hp'),
            'username'  => $this->input->post('username'),
            'password' => $this->input->post('password'),
            'level_user' => $this->input->post('level'),
        );
        $this->mUser->update($id, $data);
        $this->session->set_flashdata('success', 'Data User Berhasil Diperbaharui!!');
        redirect('Pemilik/cUser');
    }
    public function delete($id)
    {
        $this->mUser->delete($id);
        $this->session->set_flashdata('success', 'Data User Berhasil Dihapus!!');
        redirect('Pemilik/cUser');
    }
}

/* End of file cUser.php */
