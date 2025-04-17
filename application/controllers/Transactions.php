<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transactions extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Transaction_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Transaksi';
        $data['transactions'] = $this->Transaction_model->getAlltransactions();
        $this->load->view('templates/header', $data);
        $this->load->view('transactions/index', $data);
        $this->load->view('templates/footer');
    }

    public function add()
    {
        
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['judul'] = 'Tambah Transaksi';
            $this->load->view('templates/header', $data);
            $this->load->view('transactions/add');
            $this->load->view('templates/footer');
        } else {
            $data = array(
                'tanggal'   => $this->input->post('tanggal'),
                'kategori'  => $this->input->post('kategori'),
                'tipe'      => $this->input->post('tipe'),
                'jumlah'    => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            $this->Transaction_model->add_transaction($data);

            redirect('transactions');
        }
    }

    public function edit($id)
    {
        // Pass the $id to get the transaction data
        $data['transaction'] = $this->Transaction_model->get_transaction_by_id($id); 

        // Check if the transaction data exists
        if (!$data['transaction']) {
            redirect('transactions');
        }

        // Set form validation rules
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('tipe', 'Tipe', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric');
        $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');

        if ($this->form_validation->run() === FALSE) {
            $data['judul'] = 'Edit Transaksi';
            // Load views to display the form
            $this->load->view('templates/header', $data);
            $this->load->view('transactions/edit', $data); // Pass $data to the view
            $this->load->view('templates/footer');
        } else {
            // Prepare the data to be updated
            $update_data = array(
                'tanggal'   => $this->input->post('tanggal'),
                'kategori'  => $this->input->post('kategori'),
                'tipe'      => $this->input->post('tipe'),
                'jumlah'    => $this->input->post('jumlah'),
                'deskripsi' => $this->input->post('deskripsi')
            );

            // Call update function to update the transaction data
            $this->Transaction_model->update_transaction($id, $update_data);

            // Redirect after successful update
            redirect('transactions');
        }
    }

    public function delete($id)
    {
        $this->Transaction_model->delete_transaction($id);
        redirect('transactions');
    }
}
