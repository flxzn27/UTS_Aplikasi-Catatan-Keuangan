<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_model extends CI_Model {

    // Ambil semua transaksi berdasarkan user_id
    public function getAlltransactions()
    {
        $this->db->order_by('tanggal', 'DESC');
        return  $this->db->get('transactions')->result_array();
    }

    // Ambil transaksi per bulan untuk grafik
    public function get_tren_bulanan()
    {
        $this->db->select('MONTH(tanggal) as bulan, SUM(CASE WHEN tipe = "pemasukan" THEN jumlah ELSE 0 END) as total_pemasukan, SUM(CASE WHEN tipe = "pengeluaran" THEN jumlah ELSE 0 END) as total_pengeluaran');
        $this->db->from('transactions');
        $this->db->group_by('MONTH(tanggal)');
        return $this->db->get()->result();
    }

    // Ambil total pemasukan
    public function get_total_pemasukan()
    {
        $this->db->select_sum('jumlah');
        $this->db->from('transactions');
        $this->db->where('tipe', 'pemasukan');
        $result = $this->db->get()->row();
        return isset($result->jumlah) ? $result->jumlah : 0;

    }

    // Ambil total pengeluaran
    public function get_total_pengeluaran()
    {
        $this->db->select_sum('jumlah');
        $this->db->from('transactions');
        $this->db->where('tipe', 'pengeluaran');
        $result = $this->db->get()->row();
        return isset($result->jumlah) ? $result->jumlah : 0;

    }

    // Menambahkan transaksi baru
    public function add_transaction($data)
    {
        return $this->db->insert('transactions', $data);
    }

    // Update transaksi berdasarkan ID
    public function update_transaction($id, $data)
    {
        return $this->db->update('transactions', $data, array('id' => $id));
    }

    // Hapus transaksi berdasarkan ID
    public function delete_transaction($id)
    {
        return $this->db->delete('transactions', array('id' => $id));
    }

    // Ambil transaksi berdasarkan ID
    public function get_transaction_by_id($id)
    {
        $query = $this->db->get_where('transactions', array('id' => $id));
        return $query->row();
    }
}
