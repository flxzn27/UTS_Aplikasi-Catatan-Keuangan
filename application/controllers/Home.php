<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('Transaction_model');
        
        // Ambil data transaksi untuk grafik dan ringkasan
        $data['total_pemasukan'] = $this->Transaction_model->get_total_pemasukan();
        $data['total_pengeluaran'] = $this->Transaction_model->get_total_pengeluaran();
        $data['total_saldo'] = $data['total_pemasukan'] - $data['total_pengeluaran'];

        // Grafik tren bulanan
        $data['transaksi_bulanan'] = $this->Transaction_model->get_tren_bulanan();

        // Load view dashboard
        $data['judul'] = 'Dashboard - Catatan Keuangan';
        $this->load->view('templates/header', $data);
        $this->load->view('home/index', $data);
        $this->load->view('templates/footer');
    }
}
