<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

    public function index() {
        $this->load->model('penerimaan_model');
        $rows = $this->penerimaan_model->tampilkanSemua()->result();

        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'tabel/t_penerimaan2',
            'judul' => 'TABEL PENERIMAAN BARANG',
            'rows' => $rows
        );
        $this->load->view('layout', $data);
    }

    public function tambah() {
        $this->load->model('user_model');
        $suplier = $this->user_model->getById()->result();
        $this->load->library('form_validation');

        $data = array(
            'suplier'   => $suplier,
            'judul'     => 'Form Penerimaan',
            'title'     => 'Input Penerimaan',
            'action'    => base_url('Penerimaan/aksitambah'),
            'content'   => 'form/f_penerimaan', 
            'id_user'   => set_value('idsuplier', ''),
            'tanggal'   => set_value('tanggal', ''),
            'jumlah'    => set_value('',''),
            'tombol'    => 'Tambah'
        );

        $this->load->view('layout', $data);
    }

    public function aksitambah() {

//        load library form validation
        $this->form_validation->set_error_delimiters('<div style="color:red; margin-bottom: 5px">', '</div>');

//        rules validasi
        $this->form_validation->set_rules('idsuplier', 'ID Suplier', 'required');
        $this->form_validation->set_rules('tanggal', 'Tanggal', 'required');

        if ($this->form_validation->run() == FALSE) {
//           jika validasi gagal
            $this->tambah();
        } else {    
//            jika validasi berhasil
            $data = array(
                'id_user'   => $this->input->post('idsuplier'),
                'tanggal'   => $this->input->post('tanggal'),
                'jumlah'    => '',
            );

            $this->load->model('penerimaan_model');
            $this->penerimaan_model->tambah($data);

            redirect(site_url('Penerimaan'));
        }
    }

    public function detail() {
        // $this->load->model('detail_model');
        // $rows = $this->detail_model->getById()->result();

        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'tabel/t_penerimaan',
            'judul' => 'DETAIL PENERIMAAN BARANG',
            // 'id_penerimaan' => $row->id_penerimaan,
            // 'rows' => $rows
        );
        $this->load->view('layout', $data);
    }

    public function addDetail() {
        // $this->load->model('penerimaan_model');
        // $rows = $this->penerimaan_model->getById()->result();

        // $data = array(
        //     'title' => 'Detail Penerimaan Barang',
        //     'content' => 'form/f_detail',
        //     'judul' => 'ADD PENERIMAAN DETAIL',
        //     'rows' => $rows
        // );
        // $this->load->view('layout', $data);
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/user.php */
?>