<?php
class Petugas_model extends CI_Model {
    public function get_all_data()
    {
        
        $query = $this->db->get('petugas');
        return $query;
                    
       
    }
    public function get_user($username) {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->join('roles', 'roles.id = masyarakat.role_id');
        $this->db->where('username', $username);
        return $this->db->get()->row();
    }
    public function get_data()
    {
        $query = $this->db->get('petugas');
        return $query->result();
    }
    public function update($id, $data) {
        $this->db->where('id_petugas', $id);
        $this->db->update('petugas', $data);
        return $this->db->affected_rows();
    }
    public function delete($id) {
        $this->db->where('id_petugas', $id);
        $this->db->delete('petugas');
        return $this->db->affected_rows();
    }
}

?>
