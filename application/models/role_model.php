<?php

class Role_model extends CI_Model {
    public function get_role($role_id) {
        $this->db->select('*');
        $this->db->from('roles');
        $this->db->where('id', $role_id);
        return $this->db->get()->row();
    }
}