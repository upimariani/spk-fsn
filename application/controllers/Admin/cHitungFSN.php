<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cHitungFSN extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('mHitungFSN');
    }


    public function index()
    {
        $data = array(
            'variabel' => $this->mHitungFSN->produk_variabel()
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/FSN/fsn', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function periode($id)
    {
        $data = array(
            'detail' => $this->mHitungFSN->detail_periode($id)
        );
        $this->load->view('Admin/Layout/head');
        $this->load->view('Admin/Layout/navbar');
        $this->load->view('Admin/Layout/aside');
        $this->load->view('Admin/FSN/periodeFSN', $data);
        $this->load->view('Admin/Layout/footer');
    }
    public function hitung($id)
    {

        $this->form_validation->set_rules('fsn', 'Periode Produk', 'required');
        $this->form_validation->set_rules('produk', 'Nama Produk', 'required');
        $this->form_validation->set_rules('pengeluaraan', 'Pengeluaraan', 'required');
        $this->form_validation->set_rules('penerimaan', 'Penerimaan', 'required');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'id' => $id,
                'periode' => $this->mHitungFSN->periode($id)
            );
            $this->load->view('Admin/Layout/head');
            $this->load->view('Admin/Layout/navbar');
            $this->load->view('Admin/Layout/aside');
            $this->load->view('Admin/FSN/hitung', $data);
            $this->load->view('Admin/Layout/footer');
        } else {
            echo 'berhasil';

            //DATA IN
            $month = $this->input->post('fsn');
            $month_variabel = $this->mHitungFSN->variabel_periode($month);
            echo $month_variabel->periode;
            $penerimaan = $month_variabel->penerimaan;
            $pengeluaran = $month_variabel->pengeluaran;

            //DATA PERIODE SEBELUM NYA
            $before_month = $this->mHitungFSN->before_month($month);
            $before = $before_month['month']->pers_akhir;
            $explode = explode("-", $before);
            $tahun = $explode[0]; //untuk tahun
            $bulan = $explode[1]; //untuk bulan

            $before_variabel = $this->mHitungFSN->before_variabel($bulan, $tahun);

            //data persamaan akhir di peiode sebelumnya
            $pers_akhir_sebelumnya = $before_variabel->pers_akhir;

            //perhitungan rata-rata
            //prt = (paw+pak)/2
            $prt = 0;
            $persamaan_awal = $pers_akhir_sebelumnya;
            $persamaan_akhir = $persamaan_awal + $penerimaan - $pengeluaran;
            $prt = ($persamaan_awal + $persamaan_akhir) / 2;
            echo '<br><br>HASIL RATA-RATA';
            echo '<br>' . $persamaan_akhir;
            echo '<br>' . $persamaan_awal;
            echo '<br>Hasil Rata-Rata: ' . $prt;

            //perhitungan turn over ratio parsial
            //TOR p = pmk/prt
            $torp = 0;
            $torp = $pengeluaran / $prt;
            echo '<br><br>TOR PARSIAL';
            echo '<br>Hasil: ' . $torp;

            //wsp (waktu penyimpanan)
            //wsp = jhp/tor
            $wsp = 0;
            $wsp = 30 / $torp;
            echo '<br><br>Waktu Penyimpanan';
            echo '<br>Hasil: ' . $wsp;

            //TOR
            //tor = jht / wsp
            $tor = 0;
            $tor = 360 / $wsp;
            echo '<br><br>TOR';
            echo '<br>Hasil: ' . $tor;
        }
    }
}

/* End of file cHitungFSN.php */
