<?php  
	class History_model extends CI_Model {
//    nama tabel dan primary key
    private $table = 'history';
    private $pk = 'id_history';
//    tampilkan semua data
	    public function tampilkanSemua() {
	        $q = $this->db->order_by($this->pk);
	        $q = $this->db->get($this->table);
	        return $q;
	    }
}

?>