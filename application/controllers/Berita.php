<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_berita");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{

            $data['berita']=$this->M_berita->tampil_data_berita();
            // $data['kategori']=$this->M_berita->tampil_data_berita1();
            // $data['kategori1']=$this->M_berita->tampil_data_berita2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("berita",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/berita/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '102400'; //maksimum besar file 2M
       // $config['max_width']  = '3000'; //lebar maksimum 1288 px
       // $config['max_height']  = '3000'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'news_image' =>$gbr['file_name'],
                  'news_title' =>$this->input->post('news_title'),
                  'news_content' =>$this->input->post('news_content'),
                  'news_author' =>$this->input->post('news_author'),
                  'news_date' =>$this->input->post('news_date'),
                  // 'newscategory_id' =>$this->input->post('newscategory_id'),
                );
                $this->M_berita->input($data);
            }
        }
        else
        {
        $data['news_title'] = $this->input->post('news_title');
        $data['news_content'] = $this->input->post('news_content');
        $data['news_author'] = $this->input->post('news_author');
        $data['news_date'] = $this->input->post('news_date');
        $data['news_image'] = $this->input->post('news_image');
       /*  $data['newscategory_id'] = $this->input->post('newscategory_id'); */


        //call function
        $this->M_berita->input($data);
        //redirect to page

      }
          redirect('Berita'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
      $this->load->library('upload');
      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/berita/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '102400'; //maksimum besar file 2M
      // $config['max_width']  = '3000'; //lebar maksimum 1288 px
      // $config['max_height']  = '3000'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
        unlink('./assets/berita/'.$this->input->post('news_image'));
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'news_id' =>$this->input->post('news_id'),
                 'news_image' =>$gbr['file_name'],
                 'news_title' =>$this->input->post('news_title'),
                 'news_content' =>$this->input->post('news_content'),
                 'news_author' =>$this->input->post('news_author'),
                 'news_date' =>$this->input->post('news_date'),
               );
               $this->M_berita->edit($data);
           }
       }

       else
       {

         $data['news_id'] = $this->input->post('news_id');
         $data['news_title'] = $this->input->post('news_title');
         $data['news_content'] = $this->input->post('news_content');
         $data['news_author'] = $this->input->post('news_author');
         $data['news_date'] = $this->input->post('news_date');
         $data['news_image'] = $this->input->post('news_image');
         // $data['newscategory_id'] = $this->input->post('newscategory_id');
       //call function
       $this->M_berita->edit($data);
       //redirect to page

     }
         redirect('Berita'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

unlink('./assets/berita/'.$this->input->post('news_image'));
            $this->M_berita->delete($this->input->post('news_id'));
        redirect('Berita');

    }

}
?>
