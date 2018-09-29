<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Hukum extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_hukum");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['hukum']=$this->M_hukum->tampil_data_hukum();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("hukum",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/hukum/'; //path folder
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
                $this->M_hukum->input($data);
            }
        }

        else
        {
        $data['nama'] = $this->input->post('nama');
        $data['ket'] = $this->input->post('ket');
        $data['gambar'] = $this->input->post('gambar');

        //call function
        $this->M_hukum->input($data);
        //redirect to page

      }
          redirect('Hukum'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/hukum/'; //path folder
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

                   'id_hukum' =>$this->input->post('id_hukum'),
                   'gambar' =>$gbr['file_name'],
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_hukum->edit($data);
             }
         }

         else
         {
           $data['id_hukum'] = $this->input->post('id_hukum');
           $data['nama'] = $this->input->post('nama');
         $data['ket'] = $this->input->post('ket');
         $data['gambar'] = $this->input->post('gambar');

         //call function
         $this->M_hukum->edit($data);
         //redirect to page

        }
           redirect('Hukum'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('id_hukum')!="") {
            $this->M_hukum->delete($this->input->post('id_hukum'));
        }
        redirect('Hukum');

    }
}
?>
