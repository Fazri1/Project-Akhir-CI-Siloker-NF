<?php
class Mitra_model extends CI_Model {
    // Mengambil seluruh data mitra
    public function getAll(){
        $query = $this->db->get('mitra');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('mitra',['id'=>$id]);
        return $query->row();
    }

    public function simpan($data){
        $sql = "INSERT INTO mitra (nama,alamat,kontak,telpon,email,web,bidang_usaha_id,
        sektor_usaha_id) VALUES (?,?,?,?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function update($data){
        $sql = "UPDATE mitra SET nama=?, alamat=?, kontak=? ,telpon=? ,email=? ,web=? ,
        bidang_usaha_id=? ,sektor_usaha_id=? WHERE id=?";
        $this->db->query($sql,$data);
    }

    public function delete($data){
        $sql = "DELETE FROM mitra WHERE id=?";
        $this->db->query($sql, $data);
    }
}