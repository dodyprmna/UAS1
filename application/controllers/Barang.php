<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
 
class Barang extends CI_Controller {
    public function index() {
         if($this->session->userdata('level') == 'admin'){
            $this->load->model('barang_model');
            $rows = $this->barang_model->tampilkanSemua()->result();

            $data = array(
                'title' => 'List Barang',
                'content' => 'tabel/t_barang',
                'judul' => 'TABEL BARANG',
                'rows' => $rows
            );
            $this->load->view('layout', $data);
            }else{

                echo "<script>alert('Tidak dapat di akses!');history.go(-1);</script>";
            }
    }


}

/* End of file barang.php */
/* Location: ./application/controllers/user.php */
?>