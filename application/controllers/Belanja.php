<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Belanja extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_belanja");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['belanja']=$this->M_belanja->tampil_data_belanja();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("belanja",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
        $data['belanja_id'] = $this->input->post('');
        $data['belanja_tahun'] = $this->input->post('belanja_tahun');
        $data['belanja_pemerintahan'] = $this->input->post('belanja_pemerintahan');
        $data['belanja_pembangunan'] = $this->input->post('belanja_pembangunan');
        $data['belanja_pembinaan'] = $this->input->post('belanja_pembinaan');
        $data['belanja_pemberdayaan'] = $this->input->post('belanja_pemberdayaan');
        $data['belanja_lainlain'] = $this->input->post('belanja_lainlain');
        $data['belanja_total'] = $this->input->post('belanja_pemerintahan') + $this->input->post('belanja_pembangunan') + $this->input->post('belanja_pembinaan') + $this->input->post('belanja_pemberdayaan') + $this->input->post('belanja_lainlain');
      //  $data['gambar'] = $this->input->post('gambar');

        //call function
        $this->M_belanja->input($data);
        //redirect to page
          redirect('Belanja');
      }
           //jika berhasil maka akan ditampilkan view vupload

    public function edit() {
           $data['belanja_id'] = $this->input->post('belanja_id');
           $data['belanja_tahun'] = $this->input->post('belanja_tahun');
           $data['belanja_pemerintahan'] = $this->input->post('belanja_pemerintahan');
           $data['belanja_pembangunan'] = $this->input->post('belanja_pembangunan');
           $data['belanja_pembinaan'] = $this->input->post('belanja_pembinaan');
           $data['belanja_pemberdayaan'] = $this->input->post('belanja_pemberdayaan');
           $data['belanja_lainlain'] = $this->input->post('belanja_lainlain');
           $data['belanja_total'] = $this->input->post('belanja_pemerintahan') + $this->input->post('belanja_pembangunan') + $this->input->post('belanja_pembinaan') + $this->input->post('belanja_pemberdayaan') + $this->input->post('belanja_lainlain'); 
         //call function
         $this->M_belanja->edit($data);
         //redirect to page

           redirect('Belanja'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('belanja_id')!="") {
            $this->M_belanja->delete($this->input->post('belanja_id'));
        }
        redirect('Belanja');

    }
}
?>
