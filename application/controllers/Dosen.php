<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dosen extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dosen");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['dosen']=$this->M_dosen->tampil_data_dosen();
          $data['kategori']=$this->M_dosen->tampil_data_dosen1();
          $data['kategori1']=$this->M_dosen->tampil_data_dosen2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("dosen",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dosen/'; //path folder
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
                  'lecturer_image' =>$gbr['file_name'],
                  'lecturer_name' =>$this->input->post('lecturer_name'),
                  'lecturer_desc' =>$this->input->post('lecturer_desc'),
                  'major_id' =>$this->input->post('major_id'),

                    );
                $this->M_dosen->input($data);
            }
        }

        else
        {
        $data['lecturer_name'] = $this->input->post('lecturer_name');
        $data['lecturer_desc'] = $this->input->post('lecturer_desc');
        $data['major_id'] = $this->input->post('major_id');

        //call function
        $this->M_dosen->input($data);
        //redirect to page

      }
          redirect('Dosen'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dosen/'; //path folder
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

                   'lecturer_id' =>$this->input->post('lecturer_id'),
                   'lecturer_image' =>$gbr['file_name'],
                   'lecturer_name' =>$this->input->post('lecturer_name'),
                   'lecturer_desc' =>$this->input->post('lecturer_desc'),
                   'major_id' =>$this->input->post('major_id'),

                     );

                 $this->M_dosen->edit($data);
             }
         }

         else
         {
           $data['lecturer_id'] = $this->input->post('lecturer_id');
           $data['lecturer_name'] = $this->input->post('lecturer_name');
           $data['lecturer_desc'] = $this->input->post('lecturer_desc');
           $data['major_id'] = $this->input->post('major_id');

         //call function
         $this->M_dosen->edit($data);
         //redirect to page

        }
           redirect('Dosen'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('lecturer_id')!="") {
            $this->M_dosen->delete($this->input->post('lecturer_id'));
        }
        redirect('Dosen');

    }
}
?>
