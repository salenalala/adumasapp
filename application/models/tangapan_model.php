<?php

class tangapan_model extends CI_Model
{
    // public function get_data()
    // {
    //     $this->db->select('*');
    //     $this->db->from('tangapan');
    //     $this->db->join('pengaduan', 'pengaduan.id_pengaduan = tangapan.id_pengaduan');
    //     $this->db->where('status',);
    //     return $this->db->get()->row();
    // }
    public function get_all_data()
    {
        
        $query = $this->db->get('tangapan');
        return $query;
                    
       
    }
    public function get_data()
    {
        $this->db->order_by('id_tangapan', 'DESC');
        return $this->db->from('tangapan')
          ->join('pengaduan', 'pengaduan.id_pengaduan=tangapan.id_pengaduan')
          ->get()
          ->result();
    }
    public function get_data_byid($user_id)
    {
        $this->db->order_by('id_tangapan', 'DESC');
        return $this->db->from('tangapan')
          ->join('pengaduan', 'pengaduan.id_pengaduan=tangapan.id_pengaduan')
          ->join('petugas', 'petugas.id_petugas=tangapan.id_petugas')
          ->where('nik =', $user_id)
          ->get()
          ->result();
    }
   
    public function getDataByDate($tgl_awal, $tgl_akhir){

        $this->db->order_by('id_tangapan', 'ASC');
        return $this->db->from('tangapan')
          ->join('pengaduan', 'pengaduan.id_pengaduan=tangapan.id_pengaduan')
          ->where('tgl_tangapan >=', $tgl_awal)
          ->where('tgl_tangapan <=', $tgl_akhir)
          ->get()
          ->result();

        // $this->db->select('*');
        // $this->db->from('tangapan');
        // $this->db->where('tgl_tangapan >=', $tgl_awal);
        // $this->db->where('tgl_tangapan <=', $tgl_akhir);
        // $query = $this->db->get();
        // return $query->result();
      }
}