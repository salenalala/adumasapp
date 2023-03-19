<?php

class Landing_page extends CI_Controller {


    public function index(){
        $this->load->model('user_model');
        $this->load->model('petugas_model');
        $this->load->model('pengaduan_model');
        $this->load->model('tangapan_model');
        $user_id = $this->session->userdata('ses_id');
        $data['users'] = array(
            'Aktif' => 50,
            'Tidak Aktif' => 20
        );
        $data['current_no'] = 1;
        $data['jumlah_data'] = $this->petugas_model->get_all_data()->num_rows();
        $data['jumlah_pengaduan'] = $this->pengaduan_model->get_all_data()->num_rows();
        $data['pengaduan'] = $this->pengaduan_model->get_data_id($user_id);
        $data['jumlah_tangapan'] = $this->tangapan_model->get_all_data()->num_rows();
        $data['jumlah_masyarakat'] = $this->user_model->get_all_data()->num_rows();
        $data['pdf'] = $this->tangapan_model->get_data_byid($user_id);
        $this->load->view('landing_page',$data);
    }
    public function status_chart()
{
    $data = $this->db->query("SELECT status, COUNT(*) AS jumlah FROM pengaduan GROUP BY status")->result();

    $status = array();
    $jumlah = array();

    foreach($data as $row)
    {
        $status[] = $row->status;
        $jumlah[] = $row->jumlah;
    }

    $data = array(
        'status' => $status,
        'jumlah' => $jumlah
    );

    echo json_encode($data);
}
}