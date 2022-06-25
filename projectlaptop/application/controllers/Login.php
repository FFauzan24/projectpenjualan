<?php
class login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Barang');
    }

    public function index()
    {
        $data['data_barang'] = $this->Data_Barang->getalldata();
        $data['judul'] = "Form Login";
        $this->load->view('data/login', $data);
    }
    public function login()
    {
        $this->Data_Barang->validasi();
    }
}
