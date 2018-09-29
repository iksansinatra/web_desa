<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Gambar extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("m_gambar");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['gambar']=$this->m_gambar->tampil_data_gambar();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("gambar",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/gambar/'; //path folder
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
                  'nama_gambar' =>$this->input->post('nama_gambar'),
                  'ket_gambar' =>$this->input->post('ket_gambar'),

                    );
                $this->m_gambar->input($data);
            }
        }

        else
        {
          $data['nama_berita'] = $this->input->post('nama_berita');
        $data['ket_berita'] = $this->input->post('ket_berita');
        $data['gambar_berita'] = $this->input->post('gambar');
        $data['prioritas'] = $this->input->post('prioritas');
        //call function
        $this->m_gambar->input($data);
        //redirect to page

      }
          redirect('gambar'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/gambar/'; //path folder
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
                   'nama_gambar' =>$this->input->post('nama_gambar'),
                   'ket_gambar' =>$this->input->post('ket_gambar'),
                   'id_gambar' =>$this->input->post('id_gambar')
                     );
                 $this->m_gambar->edit($data);
             }
         }

         else
         {
           $data['id_gambar'] = $this->input->post('id_gambar');
           $data['nama_gambar'] = $this->input->post('nama_gambar');
           $data['gambar'] = $this->input->post('gambar');
         //call function
         $this->m_gambar->edit($data);
         //redirect to page

        }
           redirect('gambar'); //jika berhasil maka akan ditampilkan view vupload





    }

    public function delete() {

        if($this->input->post('id_gambar')!="") {
            $this->m_gambar->delete($this->input->post('id_gambar'));
        }
        redirect('gambar');

    }
}
?>
