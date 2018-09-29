<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kursus extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kursus");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['kursus']=$this->M_kursus->tampil_data_kursus();
          $data['kategori']=$this->M_kursus->tampil_data_kursus1();
          $data['kategori1']=$this->M_kursus->tampil_data_kursus2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("kursus",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kursus/'; //path folder
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
                $this->M_kursus->input($data);
            }
        }

        else
        {
        $data['course_name'] = $this->input->post('course_name');
        $data['course_credit'] = $this->input->post('course_credit');
        $data['course_desc'] = $this->input->post('course_desc');
        $data['major_id'] = $this->input->post('major_id');

        //call function
        $this->M_kursus->input($data);
        //redirect to page

      }
          redirect('Kursus'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kursus/'; //path folder
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

                   'id_tarjih' =>$this->input->post('id_tarjih'),
                   'gambar' =>$gbr['file_name'],
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_kursus->edit($data);
             }
         }

         else
         {
           $data['course_id'] = $this->input->post('course_id');
           $data['course_name'] = $this->input->post('course_name');
           $data['course_credit'] = $this->input->post('course_credit');
           $data['course_desc'] = $this->input->post('course_desc');
           $data['major_id'] = $this->input->post('major_id');
         //call function
         $this->M_kursus->edit($data);
         //redirect to page

        }
           redirect('Kursus'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('course_id')!="") {
            $this->M_kursus->delete($this->input->post('course_id'));
        }
        redirect('Kursus');
    }
}
?>
