<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pekerjaan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pekerjaan");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['pekerjaan']=$this->M_pekerjaan->tampil_data_pekerjaan();
          $data['pekerjaan1']=$this->M_pekerjaan->tampil_data_pekerjaan1();
          $data['pekerjaan2']=$this->M_pekerjaan->tampil_data_pekerjaan2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("pekerjaan",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/lowongan/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '9999'; //lebar maksimum 1288 px
       $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name'],
                  'nama' =>$this->input->post('nama'),
                  'ket' =>$this->input->post('ket'),

                    );
                $this->M_lowongan->input($data);
            }
        }

        else
        {
        $data['job_name'] = $this->input->post('job_name');
        $data['job_desc'] = $this->input->post('job_desc');
        $data['jobscategory_id'] = $this->input->post('jobscategory_id');

        //call function
        $this->M_pekerjaan->input($data);
        //redirect to page

      }
          redirect('Pekerjaan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/lowongan/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '2048'; //maksimum besar file 2M
        $config['max_width']  = '1288'; //lebar maksimum 1288 px
        $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(

                   'id_lowongan' =>$this->input->post('id_lowongan'),
                   'gambar' =>$gbr['file_name'],
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_lowongan->edit($data);
             }
         }

         else
         {
           $data['job_id'] = $this->input->post('job_id');
           $data['job_name'] = $this->input->post('job_name');
           $data['job_desc'] = $this->input->post('job_desc');
           $data['jobscategory_id'] = $this->input->post('jobscategory_id');

         //call function
         $this->M_pekerjaan->edit($data);
         //redirect to page

        }
           redirect('Pekerjaan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('job_id')!="") {
            $this->M_pekerjaan->delete($this->input->post('job_id'));
        }
        redirect('Pekerjaan');

    }
}
?>
