<?php

class pengaduan_model extends CI_Model
{
    public function get_all_data()
    {
        
        $query = $this->db->get('pengaduan');
        return $query;
                    
       
    }
    public function get_data()
    {
        
        $this->db->order_by('id_pengaduan', 'DESC');
        return $this->db->from('pengaduan')->get()
        ->result();               
       
    }
    public function get_data_id($user_id)
    {
        
        $this->db->order_by('id_pengaduan', 'DESC');
        return $this->db->from('pengaduan')
        ->where('nik =', $user_id)
        ->get()
        ->result();               
       
    }
    public function update($id, $data) {
        $this->db->where('id_pengaduan', $id);
        $this->db->update('pengaduan', $data);
        return $this->db->affected_rows();
    }
    public function delete($id_pengaduan) {
        $this->db->where('id_pengaduan', $id_pengaduan);
        $this->db->delete('pengaduan');
        return $this->db->affected_rows();
    }
    public function get_order_data() {
        $this->db->query("SELECT status, COUNT(*) AS jumlah FROM pengaduan GROUP BY status")->result();
    }
}


