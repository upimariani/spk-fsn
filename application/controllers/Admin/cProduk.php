<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cProduk extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mProduk');
    }


    public function index()
    {
        $data = array(
            'produk' => $this->mProduk->select()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Produk/produk', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function create()
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/navbar');
            $this->load->view('Admin/Layout/aside');
            $this->load->view('Admin/Produk/createProduk');
            $this->load->view('Admin/Layout/footer');
        } else {
            $config['upload_path']          = './asset/foto-produk';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());

                $this->load->view('Admin/Layout/head');
                $this->load->view('Admin/Layout/navbar');
                $this->load->view('Admin/Layout/aside');
                $this->load->view('Admin/Produk/createProduk', $error);
                $this->load->view('Admin/Layout/footer');
            } else {
                $upload_data = $this->upload->data();
                $data = array(
                    'id_produk' => $this->input->post('id'),
                    'nama_produk' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $upload_data['file_name']
                );
                $this->mProduk->insert($data);

                // $variabel = array(
                //     'id_produk' => $this->input->post('id'),
                //     'periode' => '0',
                //     'pers_awal' => '0',
                //     'penerimaan' => '0',
                //     'pengeluaran' => '0',
                //     'pers_akhir' => '0',
                //     'status' => '0'
                // );
                // $this->mProduk->variabel($variabel);
                $this->session->set_flashdata('success', 'Data Produk Berhasil Ditambahkan!!!');
                redirect('Admin/cProduk');
            }
        }
    }
    public function update($id)
    {
        $this->form_validation->set_rules('nama', 'Nama Produk', 'required');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi Produk', 'required');
        $this->form_validation->set_rules('harga', 'Harga Produk', 'required');
        if ($this->form_validation->run() == TRUE) {
            $config['upload_path']          = './asset/foto-produk';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 5000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                $data = array(
                    'produk' => $this->mProduk->edit($id)
                );
                $this->load->view('Admin/Layout/head');
                $this->load->view('Admin/Layout/navbar');
                $this->load->view('Admin/Layout/aside');
                $this->load->view('Admin/Produk/updateproduk', $data);
                $this->load->view('Admin/Layout/footer');
            } else {

                $upload_data =  $this->upload->data();
                $data = array(
                    'nama_produk' => $this->input->post('nama'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'harga' => $this->input->post('harga'),
                    'gambar' => $upload_data['file_name']
                );
                $this->mProduk->update($id, $data);
                $this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
                redirect('Admin/cProduk');
            } //tanpa ganti gambar
            $data = array(
                'nama_produk' => $this->input->post('nama'),
                'deskripsi' => $this->input->post('deskripsi'),
                'harga' => $this->input->post('harga')
            );
            $this->mProduk->update($id, $data);
            $this->session->set_flashdata('success', 'Data Produk Berhasil Diperbaharui !!!');
            redirect('Admin/cProduk');
        }
        $data = array(
            'produk' => $this->mProduk->edit($id)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/Produk/updateproduk', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function delete($id)
    {
        $this->mProduk->delete($id);
        $this->session->set_flashdata('success', 'Data Produk Berhasil Dihapus !!!');
        redirect('Admin/cProduk');
    }
}

/* End of file cProduk.php */
