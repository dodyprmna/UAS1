<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Penerimaan extends CI_Controller {

    public function index() {
        if($this->session->userdata('level') == 'admin'){

        $this->load->model('penerimaan_model');
        $rows = $this->penerimaan_model->tampilkanSemua()->result();
        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'tabel/t_penerimaan2',
            'judul' => 'TABEL PENERIMAAN BARANG',
            'rows' => $rows
        );
        $this->load->view('layout', $data);
        }else{
        echo "<script>alert('Tidak dapat di akses!');history.go(-1);</script>";
        }

    }

    public function penerimaan_sup() {
        if($this->session->userdata('level') == 'supplier'){

        $this->load->model('penerimaan_model');
        $rows = $this->penerimaan_model->tampilkanSup($this->session->userdata('id'))->result();
        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'tabel/t_penerimaan2',
            'judul' => 'TABEL PENERIMAAN BARANG',
            'rows' => $rows
        );
        $this->load->view('layout', $data);
        } else{
        echo "<script>alert('Tidak dapat di akses!');history.go(-1);</script>";
        }
    }

    public function tambah() {
        
        if($this->session->userdata('level') == 'admin'){
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
        }else{
            echo "<script>alert('Tidak dapat di akses!');history.go(-1);</script>";
            }
    }

    public function aksitambah() {
 if($this->session->userdata('level') == 'admin'){
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

        }else{
            echo "<script>alert('Tidak dapat di akses!');history.go(-1);</script>";
            }
    }

    public function tampilDetail($id=null){
                $this->load->model('penerimaan_model');
                $ID = $this->penerimaan_model->tampilkanDet($id)->result();
                 $data = array(
            'title' => 'Data DetailPenerimaan Barang',
            'content' => 'tabel/t_penerimaan',
            'judul' => 'TABEL DETAIL PENERIMAAN BARANG',
            'rows' => $ID
        );
                $this->load->view('layout', $data);
    }

    public function detail($id = null) {
        $this->load->model('penerimaan_model');
        $this->load->model('barang_model');
        $barang = $this->barang_model->tampilkanSemua()->result(); 
        $ID = $this->penerimaan_model->getById($id)->result();
        $det = $this->penerimaan_model->tampilkanDet($id)->result();
        $data = array(
            'title' => 'Data Penerimaan Barang',
            'content' => 'form/f_detail',
            'judul' => 'DETAIL PENERIMAAN BARANG',
            'id' => $id,
            'barang' => $barang,
            'action' => base_url('Penerimaan/addDetail'),
            'rows' => $det
        );
        $this->load->view('layout', $data);
    }

    public function addDetail() {
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('idbarang', 'IDbarang', 'required');

        if ($this->form_validation->run() == FALSE) {
//           jika validasi gagal
            $this->tambah();
        } else {    
//            jika validasi berhasil
            $data = array(
                'id_penerimaan'   => $this->input->post('id'),
                'id_barang'   => $this->input->post('idbarang'),
                'jumlah_barang'   => $this->input->post('jumlah'),
            );

            $this->load->model('detail_model');
            $this->detail_model->tambah($data);

            redirect(site_url('Penerimaan/detail/'.$this->input->post('id')));
    }
}

    public function delete(){
        
    }
}

/* End of file barang.php */
/* Location: ./application/controllers/user.php */
?>