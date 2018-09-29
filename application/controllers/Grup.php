<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Grup extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_grup");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['grup']=$this->M_grup->tampil_data_grup();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("grup",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/grup/'; //path folder
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
                $this->M_grup->input($data);
            }
        }

        else
        {
        $data['group_name'] = $this->input->post('group_name');
        $data['group_desc'] = $this->input->post('group_desc');


        //call function
        $this->M_grup->input($data);
        //redirect to page

      }
          redirect('Grup'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/grup/'; //path folder
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

                   'gambar' =>$gbr['file_name'],
                  'id_grup' =>$this->input->post('id_grup'),
                  'nama' =>$this->input->post('nama'),
                  'ket' =>$this->input->post('ket'),


                     );

                 $this->M_grup->edit($data);
             }
         }

         else
         {
           $data['group_id'] = $this->input->post('group_id');
           $data['group_name'] = $this->input->post('group_name');
           $data['group_desc'] = $this->input->post('group_desc');
         //call function
         $this->M_grup->edit($data);
         //redirect to page

        }
           redirect('Grup'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('group_id')!="") {
            $this->M_grup->delete($this->input->post('group_id'));
        }
        redirect('Grup');
    }
}
?>
