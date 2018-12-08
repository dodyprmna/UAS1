<?php

class Penerimaan_model extends CI_Model {
//    nama tabel dan primary key
    private $table = 'penerimaan';
    private $pk = 'id_penerimaan';
//    tampilkan semua data
    public function tampilkanSemua() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }

    public function tambah($data) {
        $this->db->insert($this->table, $data);
    }

     public function tampilkanSup($id) {
      $query=$this->db->query("SELECT * FROM penerimaan WHERE id_user='$id' ");
        return $query;
    }
    
    // public function getById($id) {
    //     $q = $this->db->where($this->pk,$id);
    //     $q = $this->db->get($this->table);
    //     return $q;
    // }


    
}