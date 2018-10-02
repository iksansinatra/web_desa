<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kontak extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kontak");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['kontak']=$this->M_kontak->tampil_data_kontak();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("kontak",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kontak/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '102400'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kontak_image' =>$gbr['file_name'],
                  'kontak_name' =>$this->input->post('kontak_name'),
          'kontak_desc' =>$this->input->post('kontak_desc'),
                    );
                $this->M_kontak->input($data);
            }
        }

        else
        {
        $data['kontak_name'] = $this->input->post('kontak_name');
        $data['image_desc'] = $this->input->post('kontak_desc');
        $data['kontak_image'] = $this->input->post('kontak_image');

        //call function
        $this->M_kontak->input($data);
        //redirect to page

      }
          redirect('Kontak'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
      
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kontak/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/kontak/'.$this->input->post('kontak_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kontak_id' =>$this->input->post('kontak_id'),
        'kontak_image' =>$gbr['file_name'],
                 'kontak_name' =>$this->input->post('kontak_name'),
                 'kontak_desc' =>$this->input->post('kontak_desc'),
                   // 'gambar' =>$gbr['file_name'],
                  // 'id_fakultas' =>$this->input->post('id_fakultas'),
                  // 'nama' =>$this->input->post('nama'),
                  // 'ket' =>$this->input->post('ket'),


                     );

                 $this->M_kontak->edit($data);
             }
         }

         else
         {
           $data['kontak_id'] = $this->input->post('kontak_id');
           $data['kontak_name'] = $this->input->post('kontak_name');
           $data['kontak_desc'] = $this->input->post('kontak_desc');
           $data['kontak_image'] = $this->input->post('kontak_image');
         //call function
         $this->M_kontak->edit($data);
         //redirect to page

        }
           redirect('Kontak'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {
      unlink('./assets/kontak/'.$this->input->post('kontak_image'));
            $this->M_kontak->delete($this->input->post('kontak_id'));
        redirect('Kontak');

    }
}
?>
