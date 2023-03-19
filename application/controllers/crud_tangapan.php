<?php

class Crud_tangapan extends CI_Controller {

    public function create(){
      $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'png|jpg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('foto'))
        {
          $data = $this->session->set_flashdata('error', 'Data gagal disimpan');
            redirect('dashboard/tabel_pengaduan');
        }
        else
        {
                $foto = $this->upload->data();
                $foto = $foto['file_name'];
                $tangapan = $this->input->post('tangapan',TRUE);
                $id_petugas = $this->input->post('id_petugas',TRUE);
                $id_pengaduan = $this->input->post('id_pengaduan',TRUE);
                
                $data = array(
                  'tangapan' => $tangapan,
                  'foto_tangapan' => $foto,
                  'id_petugas' => $id_petugas,
                  'id_pengaduan' => $id_pengaduan
                    
                );
                $this->db->insert('tangapan',$data);
                
                if($tangapan != null){
                    $data = array(
                      'id_pengaduan' => $id_pengaduan,
                      'status' => 'selesai'
                      
                      
                  );
                      $this->db->where('id_pengaduan',$id_pengaduan);
                      $this->db->update('pengaduan', $data);
                  }
                
                $data = $this->session->set_flashdata('success', 'Data berhasil disimpan');
                redirect('dashboard/tabel_tangapan');

        }
    }
    public function tambah(){

      $config['upload_path']          = './gambar/';
        $config['allowed_types']        = 'png|jpg';
        $config['max_size']             = 10000;
        $config['max_width']            = 10000;
        $config['max_height']           = 10000;

        $tangapan = $this->input->post('tangapan',TRUE);
        $id_pengaduan = $this->input->post('id_pengaduan',TRUE);
        $this->load->library('upload', $config);


        if ( ! $this->upload->do_upload('foto'))
        {
          echo validation_errors();
            // redirect('dashboard/tabel_tangapan');
        }
        else
        {
          $foto = $this->upload->data();
          $foto = $foto['file_name'];
          $tangapan = $this->input->post('tangapan',TRUE);
          $id_petugas = $this->input->post('id_petugas',TRUE);
          $id_pengaduan = $this->input->post('id_pengaduan',TRUE);
          
          
          $data = array(
              'tangapan' => $tangapan,
              'foto' => $foto,
              'id_petugas' => $id_petugas,
              'id_pengaduan' => $id_pengaduan
              
              
          );
          var_dump($data);
          // $this->db->insert('tangapan',$data);
        }
       
        // if($tangapan != null){
        //   $data = array(
        //     'id_pengaduan' => $id_pengaduan,
        //     'status' => 'selesai'
            
            
        // );
        //     $this->db->where('id_pengaduan',$id_pengaduan);
        //     $this->db->update('pengaduan', $data);
        // }
        
        // redirect('dashboard/tabel_tangapan');
    }
    public function getDataByDate(){
        $this->load->model('tangapan_model');
        $tgl_awal = $this->input->post('tgl_awal');
        $tgl_akhir = $this->input->post('tgl_akhir');
      
       
       

        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            $data['tangapan'] = $this->tangapan_model->get_data();
		    $data['current_no'] = 1;
            $data['tittle'] = 'filter';
            $data['filter'] = $this->tangapan_model->getDataByDate($tgl_awal, $tgl_akhir);
            $this->load->view('layout/header.php',$data);

           
            $this->load->view('filter.php',$data);
           
            // var_dump($data);
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
      }
     
      function tes(){
        $this->load->model('tangapan_model');
        $data['current_no'] = 1;
        $data['pdf'] = $this->tangapan_model->get_data();
        $this->load->view('layout/header');
        $this->load->view('tes',$data);
      }
}