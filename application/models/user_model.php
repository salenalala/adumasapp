<?php
class User_model extends CI_Model {
    public function get_user($username) {
        $this->db->select('*');
        $this->db->from('masyarakat');
        $this->db->join('roles', 'roles.id = masyarakat.role_id');
        $this->db->where('username', $username);
        return $this->db->get()->row();
    }
    public function get_all_data()
    {
        
        $query = $this->db->get('masyarakat');
        return $query;
                    
       
    }
    public function get_data()
    {
        $query = $this->db->get('masyarakat');
        return $query->result();
    }
    public function update($id, $data) {
        $this->db->where('nis', $id);
        $this->db->update('siswa', $data);
        return $this->db->affected_rows();
    }
    public function delete($id) {
        $this->db->where('nik', $id);
        $this->db->delete('masyarakat');
        return $this->db->affected_rows();
    }
}

?>
