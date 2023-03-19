<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
    public function index(){
        $data['tittle']='login';
       
        $this->load->view('auth/login',$data);
    }
    public function view_regis(){
        $data['tittle']='register';
        
        $this->load->view('auth/register',$data);
    }
    public function register(){

        $this->form_validation->set_rules('nik','nik','required|trim');
        $this->form_validation->set_rules('nama','nama','required|trim');
        $this->form_validation->set_rules('username','username','required|trim');
		$this->form_validation->set_rules('password','password','required|trim');
		$this->form_validation->set_rules('notelp','notelp','required|trim');
		
        if( $this->form_validation->run() == false){
            $this->session->set_flashdata('error', validation_errors());	
            redirect('auth/view_regis');	
           
		}else{
			$data = [
				'nik' => htmlspecialchars($this->input->post('nik',true)),
				'nama' => htmlspecialchars($this->input->post('nama',true)),
				'username' => htmlspecialchars( $this->input->post('username',true)),
				'password' => htmlspecialchars($this->input->post('password')),
                'telp' => htmlspecialchars( $this->input->post('notelp',true))
                
			];

			$this->db->insert('masyarakat',$data);
			redirect('auth');
            // var_dump($data);
        }
    }
    public function login() {
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_petugas=$this->login_model->auth_petugas($username,$password);
 
        if($cek_petugas->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_petugas->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_petugas']);
                    $this->session->set_userdata('ses_nama',$data['nama_petugas']);
                    redirect('dashboard');
 
                 }else{ //akses dosen
                    $this->session->set_userdata('akses','2');
                                $this->session->set_userdata('ses_id',$data['id_petugas']);
                    $this->session->set_userdata('ses_nama',$data['nama_petugas']);
                    redirect('dashboard');
                 }
 
        }else{ //jika login sebagai mahasiswa
                    $cek_masyarakat=$this->login_model->auth_masyarakat($username,$password);
                    if($cek_masyarakat->num_rows() > 0){
                            $data=$cek_masyarakat->row_array();
                    $this->session->set_userdata('masuk',TRUE);
                            $this->session->set_userdata('akses','3');
                            $this->session->set_userdata('ses_id',$data['nik']);
                            $this->session->set_userdata('ses_nama',$data['nama']);
                            $this->session->set_flashdata('message', 'Anda berhasil login.');
                         $this->session->set_flashdata('type', 'success');
                            redirect('landing_page');
                    }else{  // jika username dan password tidak ditemukan atau salah
                        $this->session->set_flashdata('error', 'isi password dan username');
                        
                        $this->load->view('auth/login');
                    }
        }
        

    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('landing_page');
    }
}
    

