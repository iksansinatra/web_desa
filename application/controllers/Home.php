<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_login");
        $this->load->model("M_gambar");
        $this->load->model("M_berita");
        $this->load->model("M_perangkat");
    		$this->load->model("M_foto");
    		$this->load->model("M_foto_kegiatan");
    		$this->load->model("M_video");
        $this->load->model("M_agenda");
		    $this->load->model("M_potensi");
		    $this->load->model("M_visi");
		    $this->load->model("M_sejarah_desa");
		    $this->load->model("M_sejarah_pemerintahan");
		    $this->load->model("M_perangkat");
		    $this->load->model("M_fasilitas");
        $this->load->library("pagination");
    }


// <<<<<<< HEAD
// */
    // public function berita(){
// =======
    public function berita(){
// >>>>>>> b4026377b3286271e3586e69e5bca5f0e9dae805

      $data['berita']=$this->M_berita->tampil_data_berita();
      $this->load->view("frontend/berita",$data);
    }

    public function visi(){

      $data['visi']=$this->M_visi->tampil_data_visi();
      $this->load->view("frontend/visi",$data);
    }

    public function sejarah_desa(){

      $data['sejarah']=$this->M_sejarah_desa->tampil_data_desa();
      $data['sejarah1']=$this->M_sejarah_pemerintahan->tampil_data_pemerintahan();
      $this->load->view("frontend/sejarah_desa",$data);
    }

    public function perangkat(){

      $data['perangkat']=$this->M_perangkat->tampil_data_perangkat();
      $this->load->view("frontend/perangkat",$data);
    }

    public function fasilitas(){

      $data['fasilitas']=$this->M_fasilitas->tampil_data_fasilitas();
      $this->load->view("frontend/fasilitas",$data);
    }

    public function agenda(){

      $data['agenda']=$this->M_agenda->tampil_data_agenda();
      $this->load->view("agenda1",$data);
    }

    public function detail_berita(){
      $id=$this->input->get('id');
      $data['berita']=$this->M_berita->tampil_detail_berita($id);
      $data['terkini']=$this->M_gambar->tampil_berita_terkini();
      $this->load->view("frontend/detail_berita",$data);
    }

    public function berita1(){
      $id=$this->input->get('id');
      $data['berita']=$this->M_notif->tampil_data_penerima1($id);
      $this->load->view("beranda1",$data);
    }

    public function pengumuman1(){
      $id=$this->input->get('id');
      $data['pengumuman']=$this->M_pengumuman->tampil_data_pengumuman1($id);
      $this->load->view("beranda2",$data);
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else {
            /*
            $data['widget_hari_ini']=$this->m_widget->widget_hari_ini();
            $data['widget_bulan_ini']=$this->m_widget->widget_bulan_ini();
            $data['widget_tahun_ini']=$this->m_widget->widget_tahun_ini();
            //------Widget ICMP atau TCP-----------
            $data['total_serangan']=$this->m_widget->total_serangan();
            $data['icmp_attack']=$this->m_widget->icmp_attack();
            $data['tcp_attack']=$this->m_widget->tcp_attack();
            //------Widget Donut Chart-------------
            $data['icmp_counter']=$this->m_widget->icmp_counter();
            $data['ftp_counter']=$this->m_widget->ftp_counter();
            $data['ssh_counter']=$this->m_widget->ssh_counter();
            $data['telnet_counter']=$this->m_widget->telnet_counter();
            $data['http_counter']=$this->m_widget->http_counter();
            */
            $data['userid']=$this->session->userdata('group_id');

            $this->load->view("attribute/header");
            $this->load->view("attribute/menus",$data);
            $this->load->view("attribute/content");
            $this->load->view("attribute/footer");
        }
    }


    public function index1(){

            $data['gambar']=$this->M_gambar->tampil_data_gambar();
            $data['semua']=$this->M_gambar->tampil_semua_data();
          //  $data['dusun']=$this->M_gambar->hitung_dusun();
          //  $data['kaur']=$this->M_gambar->hitung_kaur();
          //  $data['seksi']=$this->M_gambar->hitung_seksi();
          //  $data['agama']=$this->M_gambar->hitung_keagamaan();
            $data['terkini']=$this->M_gambar->tampil_berita_terkini();

            $this->load->view("frontend/index.php",$data);
    }

    public function login(){
        if($_POST) {
            $data['user_name'] = $this->input->post('username');
            $data['user_password'] = md5($this->input->post('password'));
            $data['group_id'] = $this->input->post('group_id');
            $result = $this->M_login->login($data);

          			if($result) {
                            $data = array(
                                'userid' => $result->user_id,
                                'user_name' => $result->user_name,
                                'group_id' => $result->group_id,
                            );

                  				$this->session->set_userdata($data);
                  				redirect('Home');
                      }
               else {
                  $this->session->set_flashdata('flash_data', 'Username atau password salah!');

                redirect('Home');
              }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}
?>
