<?php

class Mahasiswa extends CI_Controller{
    // construct adalah methodh ketika kelasnya di instalisasi
    public function __construct()
    {   
        parent::__construct();
        // modeulse database di load di semual method yang ada di class mahasiswa
        // $this->load->database();
        $this->load->model('Mahasiswa_model');
        

    }
    public function index()
    {
        // untuk memanggil module database hanya untuk fungsi index
        // $this->load>database();
        // modelnya harus di load dulu 
        // $this->load->model('Mahasiswa_model');
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Mahasiswa_model->getAllMahasiswa();
        $this->load->view('templates/header', $data);
        $this->load->view('mahasiswa/index', $data);
        $this->load->view('templates/footer');
    }
}