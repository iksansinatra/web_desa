<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{

            $data['jenis']=$this->M_jenis->tampil_data_jenis();
            // $data['kategori']=$this->M_jenis->tampil_data_jenis1();
            // $data['kategori1']=$this->M_jenis->tampil_data_jenis2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("jenis",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {

        $data['jenis_name'] = $this->input->post('jenis_name');
        $data['jenis_jiwa'] = $this->input->post('jenis_jiwa');
        $data['jenis_persen'] = $this->input->post('jenis_persen');
        /*  $data['jeniscategory_id'] = $this->input->post('jeniscategory_id'); */


        //call function
        $this->M_jenis->input($data);
        //redirect to page

      
          redirect('jenis'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['jenis_id'] = $this->input->post('jenis_id');
        $data['jenis_name'] = $this->input->post('jenis_name');
        $data['jenis_jiwa'] = $this->input->post('jenis_jiwa');
        $data['jenis_persen'] = $this->input->post('jenis_persen');
         // $data['jeniscategory_id'] = $this->input->post('jeniscategory_id');
       //call function
       $this->M_jenis->edit($data);
       //redirect to page

         redirect('jenis'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            $this->M_jenis->delete($this->input->post('jenis_id'));
        redirect('jenis');

    }

}
?>
