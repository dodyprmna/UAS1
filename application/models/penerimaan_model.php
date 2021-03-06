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

    public function getById($id) {
        $q = $this->db->where($this->pk,$id);
        $q = $this->db->get($this->table);
        return $q;
    }


     public function tampilkanSup($id) {
      $query=$this->db->query("SELECT * FROM penerimaan WHERE id_user='$id' ");
        return $query;
    }

    public function tampilkanDet($id) {
      $query=$this->db->query("SELECT id_penerimaan, p.id_barang, nama_barang, jumlah_barang FROM detail_penerimaan p join barang b on p.id_barang=b.id_barang WHERE id_penerimaan='$id' ");
        return $query;
    }

     public function delete($idp, $idb) {
        return $this->db->query("DELETE from detail_penerimaan where id_penerimaan='$idp' and id_barang='$idb'");
    }
//+      $query=$this->db->query("SELECT id_penerimaan, p.id_barang, nama_barang, jumlah_barang FROM detail_penerimaan p join barang b on p.id_barang=b.id_barang WHERE id_penerimaan='$id' ");
        //return $query;
    public function namaBar($id){
        return $this->db->query("SELECT nama_barang from Barang where id_barang='$id'");
    }
    
    // public function getById($id) {
    //     $q = $this->db->where($this->pk,$id);
    //     $q = $this->db->get($this->table);
    //     return $q;
    // }


    
}