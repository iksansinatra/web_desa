<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Usia extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_usia");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{

            $data['usia']=$this->M_usia->tampil_data_usia();
            // $data['kategori']=$this->M_usia->tampil_data_usia1();
            // $data['kategori1']=$this->M_usia->tampil_data_usia2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("usia",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {

        $data['usia_name'] = $this->input->post('usia_name');
        $data['usia_jiwa'] = $this->input->post('usia_jiwa');
        $data['usia_persen'] = $this->input->post('usia_persen');
        /*  $data['usiacategory_id'] = $this->input->post('usiacategory_id'); */


        //call function
        $this->M_usia->input($data);
        //redirect to page

      
          redirect('usia'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['usia_id'] = $this->input->post('usia_id');
        $data['usia_name'] = $this->input->post('usia_name');
        $data['usia_jiwa'] = $this->input->post('usia_jiwa');
        $data['usia_persen'] = $this->input->post('usia_persen');
         // $data['usiacategory_id'] = $this->input->post('usiacategory_id');
       //call function
       $this->M_usia->edit($data);
       //redirect to page

         redirect('usia'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            $this->M_usia->delete($this->input->post('usia_id'));
        redirect('usia');

    }

}
?>
