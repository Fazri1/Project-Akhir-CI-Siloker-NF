<?php
class All_model extends CI_Model {

    public function getAll($nama){
        $query = $this->db->get($nama);
        return $query;
    }
    // Mengambil seluruh data table berdasarkan id
    public function findById($nama,$id){
        $query = $this->db->get_where($nama,['id'=>$id]);
        return $query->row();
    }

    public function simpan($nama, $data){
        $sql = "INSERT INTO ".$nama." (nama) VALUES (?)";
        $this->db->query($sql, $data);
    }

    public function update($nama, $data){
        $sql = "UPDATE ".$nama." SET nama=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($nama, $data){
        $sql = "DELETE FROM ".$nama." WHERE id=?";
        $this->db->query($sql, $data);
    }
}
