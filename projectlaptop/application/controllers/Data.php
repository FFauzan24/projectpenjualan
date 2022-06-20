<?php
class Data extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Barang');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $data['data_barang'] = $this->Data_Barang->getalldata();
        if ($this->input->post('cari')) {
            $data['data_barang'] = $this->Data_Barang->cariDataBarang();
        }
        $data['judul'] = "Daftar Barang Yang Dijual";
        $this->load->view('templates/header', $data);
        $this->load->view('data/index');
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = "Form Tambah Barang";

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('data/tambah');
            $this->load->view('templates/footer');
        } else {
            $this->Data_Barang->tambahDataBarang();
            $this->session->set_flashdata('barang', 'Ditambahkan');
            redirect('data/');
        }
    }
    public function hapus($id_barang)
    {
        $this->Data_Barang->hapusDataBarang($id_barang);
        $this->session->set_flashdata('barang', 'Dihapus');
        redirect('data/');
    }

    public function edit($id_barang)
    {
        $data['judul'] = "Form Edit Barang";
        $data['data_barang'] = $this->Data_Barang->getDataBarangById($id_barang);
        $data['jenis'] = ['Part Laptop', 'Part Komputer', 'Komponen Lainya'];

        $this->form_validation->set_rules('nama', 'Nama Barang', 'required');
        $this->form_validation->set_rules('jenis', 'Jenis', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('stok', 'Stok', 'required');
        $this->form_validation->set_rules('detail', 'Detail', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('data/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Data_Barang->editDataBarang();
            $this->session->set_flashdata('barang', 'Diubah');
            redirect('data/');
        }
    }

    public function detail($id_barang)
    {
        $data['judul'] = "Detail Data Barang";
        $data2['data_barang'] = $this->Data_Barang->getDataBarangById($id_barang);
        $this->load->view('templates/header', $data);
        $this->load->view('data/detail', $data2);
        $this->load->view('templates/footer');
    }
}
