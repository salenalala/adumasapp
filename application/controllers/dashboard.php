<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
        $this->load->model('user_model');
        $this->load->model('petugas_model');
        $this->load->model('pengaduan_model');
        $this->load->model('tangapan_model');
        // $this->load->model('Grafik_model');
        //validasi jika user belum login
        if($this->session->userdata('masuk') != TRUE){
                $url=base_url();
                redirect($url);
            }
      }
	public function index()
	{

     
        
        $data['jumlah_data'] = $this->petugas_model->get_all_data()->num_rows();
        $data['jumlah_pengaduan'] = $this->pengaduan_model->get_all_data()->num_rows();
        $data['jumlah_tangapan'] = $this->tangapan_model->get_all_data()->num_rows();
        $data['jumlah_masyarakat'] = $this->user_model->get_all_data()->num_rows();
        $data['tittle']='dashboard';
       
        
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            
            $this->load->view('layout/header.php',$data);
            $this->load->view('layout/navbar.php');
            $this->load->view('layout/sidebar.php',$data);
            $this->load->view('home.php',$data);
            $this->load->view('layout/footter.php');
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }

        
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

    public function petugas()
	{
        
        if($this->session->userdata('akses')=='1' ){
            $data['petugas'] = $this->petugas_model->get_data();
		    $data['current_no'] = 1;
            $data['tittle'] = 'tabel petugas';
            $this->load->view('layout/header.php',$data);
            $this->load->view('layout/navbar.php');
            $this->load->view('layout/sidebar.php',$data);
            $this->load->view('tabel_m.php',$data);
            $this->load->view('layout/footter.php');
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
       
       
            
       
	}
  public function tabel_pengaduan()
	{
        
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            $data['pengaduan'] = $this->pengaduan_model->get_data();
            $data['tangapan'] = $this->tangapan_model->get_data();
		    $data['current_no'] = 1;
            $data['tittle'] = 'tabel petugas';
            $this->load->view('layout/header.php',$data);
            $this->load->view('layout/navbar.php');
            $this->load->view('layout/sidebar.php',$data);
            $this->load->view('tabel_pengaduan.php',$data);
            $this->load->view('layout/footter.php');
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
       
       
            
       
	}
  public function grafik()
	{
        
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
          $this->load->model('pengaduan_model');
          $data['orders'] = $this->pengaduan_model->get_order_data();
		    $data['current_no'] = 1;
            $data['tittle'] = 'grafik';
            
            $this->load->view('grafik.php',$data);
           
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
       
       
            
       
	}
  public function tabel_tangapan()
	{


         $tgl_awal = $this->input->get('tgl_awal');
        $tgl_akhir = $this->input->get('tgl_akhir');
      
       
        if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
            $data['tangapan'] = $this->tangapan_model->get_data();
		    $data['current_no'] = 1;
            $data['tittle'] = 'tabel petugas';
            // $data['filter'] = $this->tangapan_model->getDataByDate($tgl_awal, $tgl_akhir);
            $this->load->view('layout/header.php',$data);
            $this->load->view('layout/navbar.php');
            $this->load->view('layout/sidebar.php',$data);
            $this->load->view('tabel_tangapan.php',$data);
            $this->load->view('layout/footter.php');
          }else{
            echo "Anda tidak berhak mengakses halaman ini";
          }
       
       
            
       
	}
  public function getUserByStatus()
{
    $data = $this->db->query("SELECT status, COUNT(*) as jumlah FROM penngaduan GROUP BY status")->result_array();

    echo json_encode($data);
}

}
