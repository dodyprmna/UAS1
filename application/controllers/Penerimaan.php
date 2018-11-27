<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

    public function index() {
        $this->load->model('penerimaan_model');
        $rows = $this->penerimaan_model->tampilkanSemua()->result();

        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'tabel/t_penerimaan',
            'judul' => 'TABEL PENERIMAAN BARANG',
            'rows' => $rows
        );
        $this->load->view('layout', $data);
    }

    public function tambah() {
        $this->load->model('barang_model');
        $this->load->model('user_model');
        $suplier = $this->user_model->getById()->result();
        $barang = $this->barang_model->tampilkanSemua()->result();
        $this->load->library('form_validation');

        $data = array(
            'suplier'   => $suplier,
            'barang'    => $barang,
            'judul'     => 'Form Penerimaan',
            'title'     => 'Input Penerimaan',
            'action'    => base_url('Penerimaan/aksitambah'),
            'content'   => 'form/f_penerimaan',
            'id_barang' => set_value('idbarang', ''),
            'id_user'   => set_value('idsuplier', ''),
            'tanggal'   => set_value('tanggal', ''),
            'jumlah'    => set_value('jumlah', ''),
            'tombol'    => 'Tambah'
        );

        $this->load->view('layout', $data);
    }

    public function aksitambah() {

//        load library form validation
        $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');

//        rules validasi
        $this->form_validation->set_rules('idbarang', 'ID Barang', 'required');
        $this->form_validation->set_rules('idsuplier', 'ID Suplier', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|min_length[1]|max_length[3]');

        if ($this->form_validation->run() == FALSE) {
//           
            $this->tambah();
        } else {    
//            jika validasi berhasil
            $data = array(
                'id_barang' => $this->input->post('idbarang'),
                'id_user'   => $this->input->post('idsuplier'),
                'tanggal'   => $this->input->post('tanggal'),
                'jumlah'   => $this->input->post('jumlah')
            );

            $this->load->model('penerimaan_model');
            $this->user_model->tambah($data);

            redirect(site_url('Penerimaan'));
        }
    }

}

/* End of file barang.php */
/* Location: ./application/controllers/user.php */
?>