<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'Tentang CKM';
        $this->load->view('templates/header', $data);
        $this->load->view('about/index');
        $this->load->view('templates/footer');
    }
}
