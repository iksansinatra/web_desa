<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Userprofile extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_userprofile");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['userprofile']=$this->M_userprofile->tampil_data_userprofile();
            $data['kategori']=$this->M_userprofile->tampil_data_userprofile1();
            $data['kategori1']=$this->M_userprofile->tampil_data_userprofile2();
            $data['kategori2']=$this->M_userprofile->tampil_data_userprofile3();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("userprofile",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/userprofile/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '2048'; //lebar maksimum 1288 px
       $config['max_height']  = '2048'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'userprofile_image' =>$gbr['file_name'],
                  'userprofile_name' =>$this->input->post('userprofile_name'),
                  'userprofile_address' =>$this->input->post('userprofile_address'),
                  'userprofile_phone' =>$this->input->post('userprofile_phone'),
                  'userprofile_email' =>$this->input->post('userprofile_email'),
                  'group_id' =>$this->input->post('group_id'),
                  'user_id' =>$this->input->post('user_id'),
                );

                $this->M_userprofile->input($data);

            }
        }

        else
        {
        $data['userprofile_name'] = $this->input->post('userprofile_name');
        $data['userprofile_address'] = $this->input->post('userprofile_address');
        $data['userprofile_phone'] = $this->input->post('userprofile_phone');
        $data['userprofile_email'] = $this->input->post('userprofile_email');
        $data['group_id'] = $this->input->post('group_id');
        $data['user_id'] = $this->input->post('user_id');

        //call function
        $this->M_userprofile->input($data);
        //redirect to page

      }
          redirect('Userprofile'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/userprofile/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '10240'; //maksimum besar file 2M
      $config['max_width']  = '2048'; //lebar maksimum 1288 px
      $config['max_height']  = '2048'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'userprofile_id' =>$this->input->post('userprofile_id'),
                 'userprofile_image' =>$gbr['file_name'],
                 'userprofile_name' =>$this->input->post('userprofile_name'),
                 'userprofile_address' =>$this->input->post('userprofile_address'),
                 'userprofile_phone' =>$this->input->post('userprofile_phone'),
                 'userprofile_email' =>$this->input->post('userprofile_email'),
                 'group_id' =>$this->input->post('group_id'),
                 'user_id' =>$this->input->post('user_id'),
               );
               $this->M_userprofile->edit($data);
           }
       }

       else
       {

         $data['userprofile_id'] = $this->input->post('userprofile_id');
         $data['userprofile_name'] = $this->input->post('userprofile_name');
         $data['userprofile_address'] = $this->input->post('userprofile_address');
         $data['userprofile_phone'] = $this->input->post('userprofile_phone');
         $data['userprofile_email'] = $this->input->post('userprofile_email');
         $data['group_id'] = $this->input->post('group_id');
         $data['user_id'] = $this->input->post('user_id');

        //call function
       $this->M_userprofile->edit($data);
       //redirect to page

     }
         redirect('Userprofile'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('userprofile_id')!="") {
            $this->M_userprofile->delete($this->input->post('userprofile_id'));
        }
        redirect('Userprofile');
    }
}
?>
