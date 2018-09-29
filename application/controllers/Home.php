<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_login");
        $this->load->model("M_widget");
        $this->load->model("M_gambar");
        $this->load->model("M_berita");
        $this->load->model("M_galeri");
        $this->load->model("M_perangkat");
		$this->load->model("M_foto");
		$this->load->model("M_foto_kegiatan");
		$this->load->model("M_video");
        $this->load->model("M_agenda");
		$this->load->model("M_potensi");
        $this->load->library("pagination");
    }

  /*  public function index(){
      $lang=$this->input->get('ln');
      if($lang == "en")
      {
        $data['lang']=true;
      }
      else
      {
        $data['lang']=false;
      }
      //var_dump($lang);

      $config = array();
        $config["base_url"] = base_url() . "index.php/Home/index/";
        $config["total_rows"] = $this->m_galeri->record_count();
        $config["per_page"] = 6;
        $config["uri_segment"] = 3;

        $this->pagination->initialize($config);

        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
        $data["galeri"] = $this->m_galeri->fetch_countries($config["per_page"], $page);
        $data["links"] = $this->pagination->create_links();

      $data['gambar']=$this->m_gambar->tampil_data_gambar();
      $data['pengumuman']=$this->m_pengumuman->tampil_data_pengumuman();
      $data['berita']=$this->m_notif->tampil_data_penerima();
      $data['agenda']=$this->m_agenda->tampil_data_agenda();
    //  $data['galeri']=$this->m_galeri->tampil_data_galeri();


        $this->load->view("beranda",$data);
    }

*/
    public function berita(){

      $data['berita']=$this->M_notif->tampil_data_penerima();
      $this->load->view("berita",$data);
    }

    public function pengumuman(){

      $data['pengumuman']=$this->M_pengumuman->tampil_data_pengumuman();
      $this->load->view("pengumuman1",$data);
    }

    public function agenda(){

      $data['agenda']=$this->M_agenda->tampil_data_agenda();
      $this->load->view("agenda1",$data);
    }

    public function agenda1(){
      $id=$this->input->get('id');
      $data['agenda']=$this->M_agenda->tampil_data_agenda1($id);
      $this->load->view("beranda3",$data);
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
        }else{
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
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("attribute/content");
            $this->load->view("attribute/footer");
        }
    }

    public function login(){
        if($_POST) {
            $data['user_name'] = $this->input->post('username');
            $data['user_password'] = md5($this->input->post('password'));
            $result = $this->M_login->login($data);

          			if($result) {
                            $data = array(
                                'userid' => $result->user_id,
                                'user_name' => $result->user_name,
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
