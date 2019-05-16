<?php

class Barang_model extends CI_Model {
//    nama tabel dan primary key
    private $table = 'barang';
    private $pk = 'id_barang';
    private $name = 'nama-barang';
//    tampilkan semua data
    public function tampilkanSemua() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }
    
    public function getById($id) {
        $q = $this->db->where($this->pk,$id);
        $q = $this->db->get($this->table);
        return $q;
    }
    
    
}