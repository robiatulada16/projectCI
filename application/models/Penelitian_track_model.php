<?php

class Pengajuan_track_model extends CI_Model
{
public function insert_penelitian($data)
    {
        $query= $this->db->insert('penelitian',$data);
        if($query){
            return true;
            return $query;
        }else{
            return false;
        }
    }

    public function findById($id)
    {
        $query = $this->db->get_where('penelitian', ['id' => $id])->row_array();
        return $query;
    }

    public function showById($id)
    {
        $this->db->select('*');
        $this->db->join('penduduk','penduduk.nik=penelitian.NIK');
        $query = $this->db->get_where('penelitian', ['id' => $id])->row_array();
        return $query;
    }
}
