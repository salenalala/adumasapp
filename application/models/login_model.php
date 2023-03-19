<?php
class Login_model extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function get_data() {
        $query = $this->db->get('masyarakat');
        return $query->result();
    }
    //cek username dan password dosen
    function auth_petugas($username,$password){
        $query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
 
    //cek username dan password mahasiswa
    function auth_masyarakat($username,$password){
        $query=$this->db->query("SELECT * FROM masyarakat WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
 
}