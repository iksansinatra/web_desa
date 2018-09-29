<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Galeri extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("m_galeri");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['galeri']=$this->m_galeri->tampil_data_galeri();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("galeri",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/galeri/'; //path folder
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
                  'galeri' =>$this->input->post('galeri'),
                  'ket_galeri' =>$this->input->post('ket_galeri'),
                  'kategori' =>$this->input->post('kategori')

                    );
                $this->m_galeri->input($data);
            }
        }

        else
        {
          $data['galeri'] = $this->input->post('galeri');
        $data['ket_galeri'] = $this->input->post('ket_galeri');
        $data['gambar'] = $this->input->post('gambar');
        $data['kategori'] = $this->input->post('kategori');
        //call function
        $this->m_galeri->input($data);
        //redirect to page

      }
          redirect('galeri'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/galeri/'; //path folder
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
                   'galeri' =>$this->input->post('galeri'),
                   'ket_galeri' =>$this->input->post('ket_galeri'),
                   'kategori' =>$this->input->post('kategori'),
                  'id_galeri' =>$this->input->post('id_galeri')
                     );
                 $this->m_galeri->edit($data);
             }
         }

         else
         {
           $data['id_galeri'] = $this->input->post('id_galeri');
           $data['galeri'] = $this->input->post('galeri');
         $data['ket_galeri'] = $this->input->post('ket_galeri');
         $data['gambar'] = $this->input->post('gambar');
         $data['kategori'] = $this->input->post('kategori');
         //call function
         $this->m_galeri->input($data);
         //redirect to page

        }
           redirect('galeri'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('id_galeri')!="") {
            $this->m_galeri->delete($this->input->post('id_galeri'));
        }
        redirect('galeri');

    }
}
?>
