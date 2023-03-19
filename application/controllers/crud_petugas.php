<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud_petugas extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('petugas_model');
    }
    public function tambah(){

        $this->form_validation->set_rules('id_petugas','id_petugas','required|trim');
        $this->form_validation->set_rules('nama_petugas','nama_petugas','required|trim');
        $this->form_validation->set_rules('username','username','required|trim');
		$this->form_validation->set_rules('password','password','required|trim');
		$this->form_validation->set_rules('telpon','telpon','required|trim');
		$this->form_validation->set_rules('level','level','required|trim');
		

		if( $this->form_validation->run() == false){
            redirect('dashboard/petugas');		
		}else{
			$data = [
				'id_petugas' => htmlspecialchars($this->input->post('id_petugas',true)),
				'nama_petugas' => htmlspecialchars($this->input->post('nama_petugas',true)),
				'username' => htmlspecialchars( $this->input->post('username',true)),
				'password' => htmlspecialchars($this->input->post('password')),
                'telpon' => htmlspecialchars( $this->input->post('telpon',true)),
                'level' => htmlspecialchars( $this->input->post('level',true)),
			];

			$this->db->insert('petugas',$data);
			redirect('dashboard/petugas');
            // var_dump($data);
		}

    }
    public function edit() {
        
        $id_petugas=    $this->input->post('id_petugas',true);
        $nama_petugas =    $this->input->post('nama_petugas',true);
        $username =	 $this->input->post('username',true);
        $password =	 $this->input->post('password',true);
        $telpon =   $this->input->post('telpon',true);
        $level = $this->input->post('level',true);
        

        $data = array(
            'id_petugas' => $id_petugas,
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => $password,
            'telpon' =>  $telpon,
            'level' => $level
            
        );
            $this->db->where('id_petugas',$id_petugas);
            $this->db->update('petugas', $data);
            redirect('dashboard/petugas');
        // var_dump($data);
}
    public function delete($id) {
        $this->load->model('user_model');
        $affected_rows = $this->petugas_model->delete($id);
        redirect('dashboard/petugas');
    }

}