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
		    $this->load->model("M_pariwisata");
		    $this->load->model("M_visi");
		    $this->load->model("M_sejarah_desa");
		    $this->load->model("M_sejarah_pemerintahan");
		    $this->load->model("M_perangkat");
		    $this->load->model("M_fasilitas");
		    $this->load->model("M_belanja");
		    $this->load->model("M_pendapatan");
        $this->load->library("pagination");
    }


// <<<<<<< HEAD
// */
    // public function berita(){
// =======
    public function berita(){
// >>>>>>> b4026377b3286271e3586e69e5bca5f0e9dae805

      $data['berita']=$this->M_berita->tampil_data_berita();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/berita",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function visi(){

      $data['visi']=$this->M_visi->tampil_data_visi();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/visi",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function anggaran(){

      $data['belanja']=$this->M_belanja->tampil_data_belanja();
      $data['pendapatan']=$this->M_pendapatan->tampil_data_pendapatan();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/anggaran",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function kegiatan(){

      $data['kegiatan']=$this->M_gambar->tampil_semua_data();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/kegiatan",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function potensi(){

      $data['potensi']=$this->M_potensi->tampil_data_potensi();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/potensi",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function pariwisata(){

      $data['pariwisata']=$this->M_pariwisata->tampil_data_pariwisata();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/pariwisata",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function kontak(){
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/kontak");
      $this->load->view("frontend/attribute/footer.php");
    }

    public function sejarah_desa(){

      $data['sejarah']=$this->M_sejarah_desa->tampil_data_desa();
      $data['sejarah1']=$this->M_sejarah_pemerintahan->tampil_data_pemerintahan();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/sejarah_desa",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function perangkat(){

      $data['perangkat']=$this->M_perangkat->tampil_data_perangkat();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/perangkat",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function fasilitas(){

      $data['fasilitas']=$this->M_fasilitas->tampil_data_fasilitas();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/fasilitas",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function foto(){
/*
      #set Limit
      if ($this->uri->segment(3) != "") {
        $limit = $this->uri->segment(3);
      } else {
        $limit = 3;
      }

      #Config for pagination...
      $config                = array();
      $config["base_url"]    = base_url() . "index.php/Home/foto/" . $limit;
      $config["total_rows"]  = $this->M_foto->record_count();
      $config["per_page"]    = $limit;
      $config["uri_segment"] = 4;

      #Config css for pagination...
      $config['full_tag_open']   = '<ul class="pagination">';
      $config['full_tag_close']  = '</ul>';
      $config['first_link']      = "First";
      $config['last_link']       = "Last";
      $config['first_tag_open']  = '<li>';
      $config['first_tag_close'] = '</li>';
      $config['prev_link']       = '&laquo';
      $config['prev_tag_open']   = '<li class="prev">';
      $config['prev_tag_close']  = '</li>';
      $config['next_link']       = '&raquo';
      $config['next_tag_open']   = '<li>';
      $config['next_tag_close']  = '</li>';
      $config['last_tag_open']   = '<li>';
      $config['last_tag_close']  = '</li>';
      $config['cur_tag_open']    = '<li class="active"><a href="#">';
      $config['cur_tag_close']   = '</a></li>';
      $config['num_tag_open']    = '<li>';
      $config['num_tag_close']   = '</li>';

      #Check Page in Segement 3...
      if ($this->uri->segment(4) == "") {
        $data['number'] = 0;
      } else {
        $data['number'] = $this->uri->segment(4);
      }

      #Generate Pagination...
      $this->pagination->initialize($config);
      $page           = ($this->uri->segment(4)) ? $this->uri->segment(4) : 0;
      $data["foto"]   = $this->M_foto->fetch_user($config["per_page"], $page);
      $data["column"] = $this->M_foto->select_column_name($this->db->database);
      $data["links"]  = $this->pagination->create_links();
*/
      $data['foto']=$this->M_foto->tampil_data_foto1();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/foto",$data);
      $this->load->view("frontend/attribute/footer.php");
    }


    public function foto_kegiatan(){

      $data['foto']=$this->M_foto_kegiatan->tampil_data_foto();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/foto_kegiatan",$data);
      $this->load->view("frontend/attribute/footer.php");
    }


    public function video(){

      $data['video']=$this->M_video->tampil_data_video();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/video",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function agenda(){

      $data['agenda']=$this->M_agenda->tampil_data_agenda();
      $this->load->view("agenda1",$data);
    }

    public function detail_berita(){
      $id=$this->input->get('id');
      $data['berita']=$this->M_berita->tampil_detail_berita($id);
      $data['terkini']=$this->M_gambar->tampil_berita_terkini();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/detail_berita",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function detail_potensi(){
      $id=$this->input->get('id');
      $data['potensi']=$this->M_potensi->tampil_detail_potensi($id);
      $data['potensi1']=$this->M_potensi->tampil_data_potensi();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/detail_potensi",$data);
      $this->load->view("frontend/attribute/footer.php");
    }

    public function detail_pariwisata(){
      $id=$this->input->get('id');
      $data['pariwisata']=$this->M_pariwisata->tampil_detail_pariwisata($id);
      $data['pariwisata1']=$this->M_pariwisata->tampil_data_pariwisata();
      $this->load->view("frontend/attribute/header.php");
      $this->load->view("frontend/detail_pariwisata",$data);
      $this->load->view("frontend/attribute/footer.php");
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

            $data['terkini']=$this->M_gambar->tampil_berita_terkini();

            $this->load->view("frontend/attribute/header.php");
            $this->load->view("frontend/index.php",$data);
            $this->load->view("frontend/attribute/footer.php");
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
                                'user_fullname' => $result->user_fullname,
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
