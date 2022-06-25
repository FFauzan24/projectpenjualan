<?php
class Data_Barang extends CI_model
{
    public function getalldata()
    {
        return $this->db->get('data_barang')->result_array();
        $this->db->where('id_barang > 0');
    }
    public function tambahDataBarang()
    {
        //upload photo
        $config['max_size'] = 2048;
        $config['allowed_types'] = "png|jpg|jpeg|gif";
        $config['remove_spaces'] = TRUE;
        $config['overwrite'] = TRUE;
        $config['upload_path'] = FCPATH . 'images';
        $file = $this->input->post('gambar');

        $this->load->library('upload');
        $this->upload->initialize($config);

        $this->upload->do_upload('gambar');
        $data_image = $this->upload->data('gambar');
        $location = base_url() . 'assets/data_barang/';
        $pict = $location . $data_image;

        $data = array(
            "id_barang" => null,
            "Nama" => $this->input->post('nama', true),
            "jenis" => $this->input->post('jenis', true),
            "detail" => $this->input->post('detail', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true),
            "gambar" =>  $pict
        );

        $this->db->insert('data_barang', $data);
    }

    public function hapusDataBarang($id_barang)
    {
        $this->db->where('id_barang', $id_barang);
        $this->db->delete('data_barang');
    }
    public function editDataBarang()
    {
        $data = array(
            "Nama" => $this->input->post('nama', true),
            "jenis" => $this->input->post('jenis', true),
            "detail" => $this->input->post('detail', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true)

        );
        $this->db->where('id_barang', $this->input->post('id'));
        $this->db->update('data_barang', $data);
    }
    public function getDataBarangById($id_barang)
    {
        return $this->db->get_where('data_barang', ['id_barang' => $id_barang])->row_array();
    }
    public function cariDataBarang()
    {
        $cari = $this->input->post('cari');
        $this->db->like('Nama', $cari);
        return $this->db->get('data_barang')->result_array();
    }
    public function tambahDatakeranjang()
    {
        $data = array(
            "id_barang" => null,
            "Nama" => $this->input->post('nama', true),
            "jenis" => $this->input->post('jenis', true),
            "detail" => $this->input->post('detail', true),
            "harga" => $this->input->post('harga', true),
            "stok" => $this->input->post('stok', true)
        );

        $this->db->insert('data_barang', $data);
    }
}
