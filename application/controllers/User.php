<?php
class User extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Barang');
        $this->load->library('form_validation');
        $this->load->library('upload');
        $this->load->library('session');
    }

    public function index()
    {
        $data['data_barang'] = $this->Data_Barang->getalldata();
        $data['judul'] = 'Halaman Home User';
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/home', $data);
        $this->load->view('templates/footer');
    }
    public function keranjang()
    {
        $data['data_barang'] = $this->Data_Barang->getalldata();
        $data['judul'] = 'Halaman Keranjang User';
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/keranjang', $data);
        $this->load->view('templates/footer');
    }
    public function order()
    {
        $data['judul'] = 'Halaman Order User';
        $this->load->view('templates/header_user', $data);
        $this->load->view('user/order', $data);
        $this->load->view('templates/footer');
    }
    public function detail($id_barang)
    { {
            $data['judul'] = "Detail Data Barang";
            $data2['data_barang'] = $this->Data_Barang->getDataBarangById($id_barang);
            $this->load->view('templates/header_user', $data);
            $this->load->view('user/detail', $data2);
            $this->load->view('templates/footer');
        }
    }
    public function checkout()
    {
        $data['judul'] = 'Halaman Keranjang User';
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header_user', $data);
            $this->load->view('user/keranjang');
            $this->load->view('templates/footer');
        } else {
            $this->Data_Barang->tambahDatakeranjang();
            redirect('user/keranjang');
        }
    }
}
