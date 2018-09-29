<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_user");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['user']=$this->M_user->tampil_data_user();
            $data['kategori']=$this->M_user->tampil_data_user1();
            $data['kategori1']=$this->M_user->tampil_data_user2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("user",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/user/'; //path folder
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
                  'gambar' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                );

                $this->m_agenda->input($data);

            }
        }

        else
        {
        $data['user_name'] = $this->input->post('user_name');
        $data['user_password'] = md5($this->input->post('user_password'));
        $data['user_ipaddress'] = $this->input->post('user_ipaddress');
        $data['user_salt'] = $this->input->post('user_salt');
        $data['user_email'] = $this->input->post('user_email');
        $data['user_created'] = $this->input->post('user_created');
        $data['user_lastlogin'] = $this->input->post('user_lastlogin');
        $data['username_active'] = $this->input->post('username_active');
        $data['group_id'] = $this->input->post('group_id');
        //call function
        $this->M_user->input($data);
        //redirect to page

      }
          redirect('User'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/agenda/'; //path folder
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
                 'id_agenda' =>$this->input->post('id_agenda'),
                 'gambar' =>$gbr['file_name'],
                 'judul' =>$this->input->post('judul'),
                 'isi' =>$this->input->post('isi'),
               );
               $this->m_agenda->edit($data);
           }
       }

       else
       {

         $data['user_id'] = $this->input->post('user_id');
         $data['user_name'] = $this->input->post('user_name');
         $data['user_password'] = md5($this->input->post('user_password'));
         $data['user_ipaddress'] = $this->input->post('user_ipaddress');
         $data['user_salt'] = $this->input->post('user_salt');
         $data['user_email'] = $this->input->post('user_email');
         $data['user_created'] = $this->input->post('user_created');
         $data['user_lastlogin'] = $this->input->post('user_lastlogin');
         $data['username_active'] = $this->input->post('username_active');
         $data['group_id'] = $this->input->post('group_id');
        //call function
       $this->M_user->edit($data);
       //redirect to page

     }
         redirect('User'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('user_id')!="") {
            $this->M_user->delete($this->input->post('user_id'));
        }
        redirect('User');
    }
}
?>
