<?php

class Crud_pengaduan extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('petugas_model');
        $this->load->model('pengaduan_model');
        $this->load->model('tangapan_model');

      }
    public function upload_pengaduan(){

        $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'png|jpg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
            $this->session->set_flashdata('error', 'isi semua data.');
                $this->session->set_flashdata('type', 'error');
            redirect('landing_page');
        }
        else
        {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $nik = htmlspecialchars($this->input->post('nik',true));
                $isi = htmlspecialchars($this->input->post('isi',true));
                $status = htmlspecialchars($this->input->post('status',true));
                
                $data = array(
                    'nik' => $nik,
                    'isi_laporan' => $isi,
                    'status' => $status,
                    'foto' => $foto
                    
                );
                $this->db->insert('pengaduan',$data);
                // var_dump($data);
                $this->session->set_flashdata('message', 'selamat data berhasil di simpan.');
                $this->session->set_flashdata('type', 'success');
                redirect('landing_page');

        }
    }
    public function edit() {
        
        $id_pengaduan =    $this->input->post('id_pengaduan',true);
        $status = $this->input->post('status',true);
        
        if($status == 'di tolak'){
            $this->load->model('pengaduan_model');
            $affected_rows = $this->pengaduan_model->delete($id_pengaduan);
            redirect('dashboard/tabel_pengaduan');
            // echo $status;
        }else{
            $data = array(
                'id_pengaduan' => $id_pengaduan,
                'status' => $status,
                
                
            );
                $this->db->where('id_pengaduan',$id_pengaduan);
                $this->db->update('pengaduan', $data);
                redirect('dashboard/tabel_pengaduan');
        }

        
    }
    public function edit_pengaduan() {
        
        $id_pengaduan =    $this->input->post('id_pengaduan',true);
        $isi = $this->input->post('isi_laporan',true);
        
        
        
            $data = array(
                'id_pengaduan' => $id_pengaduan,
                'isi_laporan' => $isi,
                
                
            );
                $this->db->where('id_pengaduan',$id_pengaduan);
                $this->db->update('pengaduan', $data);
                redirect('landing_page');
        

        
    }
    public function delete($id) {
        $this->load->model('pengaduan_model');
        $affected_rows = $this->pengaduan_model->delete($id);
        redirect('dashboard/tabel_pengaduan');
    }
}