<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pendapatan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pendapatan");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['pendapatan']=$this->M_pendapatan->tampil_data_pendapatan();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("pendapatan",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
        $data['pendapatan_id'] = $this->input->post('');
        $data['pendapatan_tahun'] = $this->input->post('pendapatan_tahun');
        $data['pendapatan_pad'] = $this->input->post('pendapatan_pad');
        $data['pendapatan_dd'] = $this->input->post('pendapatan_dd');
        $data['pendapatan_add'] = $this->input->post('pendapatan_add');
        $data['pendapatan_bk'] = $this->input->post('pendapatan_bk');
        $data['pendapatan_total'] = $this->input->post('pendapatan_pad') + $this->input->post('pendapatan_dd') + $this->input->post('pendapatan_add') + $this->input->post('pendapatan_bk');
      //  $data['gambar'] = $this->input->post('gambar');

        //call function
        $this->M_pendapatan->input($data);
        //redirect to page
          redirect('Pendapatan');
      }
           //jika berhasil maka akan ditampilkan view vupload

    public function edit() {
           $data['pendapatan_id'] = $this->input->post('pendapatan_id');
           $data['pendapatan_tahun'] = $this->input->post('pendapatan_tahun');
           $data['pendapatan_pad'] = $this->input->post('pendapatan_pad');
           $data['pendapatan_dd'] = $this->input->post('pendapatan_dd');
           $data['pendapatan_add'] = $this->input->post('pendapatan_add');
           $data['pendapatan_bk'] = $this->input->post('pendapatan_bk');
           $data['pendapatan_total'] = $this->input->post('pendapatan_pad') + $this->input->post('pendapatan_dd') + $this->input->post('pendapatan_add') + $this->input->post('pendapatan_bk'); 
         //call function
         $this->M_pendapatan->edit($data);
         //redirect to page

           redirect('Pendapatan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('pendapatan_id')!="") {
            $this->M_pendapatan->delete($this->input->post('pendapatan_id'));
        }
        redirect('Pendapatan');

    }
}
?>