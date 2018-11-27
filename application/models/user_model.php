<?php

class User_model extends CI_Model {
//    nama tabel dan primary key
    private $table = 'user';
    private $pk = 'id_user';
//    tampilkan semua data
    public function tampilkanSemua() {
        $q = $this->db->order_by($this->pk);
        $q = $this->db->get($this->table);
        return $q;
    }
    
    public function getById() {
    	$q = $this->db->order_by($this->pk);
        $q = $this->db->where('status',1);	
        $q = $this->db->get($this->table);
        return $q;
    }
}