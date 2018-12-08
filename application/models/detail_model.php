<?php

class Detail_model extends CI_Model {
    
//    nama tabel dan primary key
    private $table = 'detail_penerimaan';
    private $pk = 'id_penerimaan';
    
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
    
    public function tambah($data) {
        $this->db->insert($this->table, $data);
    }
}