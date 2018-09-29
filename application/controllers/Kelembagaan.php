<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kelembagaan extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kelembagaan");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{

            $data['kelembagaan']=$this->M_kelembagaan->tampil_data_berita();
            // $data['kategori']=$this->M_kelembagaan->tampil_data_berita1();
            // $data['kategori1']=$this->M_kelembagaan->tampil_data_berita2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("kelembagaan",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kelembagaan/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '3000'; //lebar maksimum 1288 px
       $config['max_height']  = '3000'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  // 'news_image' =>$gbr['file_name'],
                  'potential_institute' =>$this->input->post('potential_institute'),
                  'potential_2016' =>$this->input->post('potential_2016'),
                  'potential_2017' =>$this->input->post('potential_2017'),
                  'potential_2018' =>$this->input->post('potential_2018'),
                  'potential_2019' =>$this->input->post('potential_2019'),
				  'potential_2020' =>$this->input->post('potential_2020'),
				  'potential_info' =>$this->input->post('potential_info'),
                );
                $this->M_kelembagaan->input($data);
            }
        }
        else
        {
        $data['potential_institute'] = $this->input->post('news_title');
        $data['potential_2016'] = $this->input->post('potential_2016');
        $data['potential_2017'] = $this->input->post('potential_2017');
        $data['potential_2018'] = $this->input->post('potential_2018');
        $data['potential_2019'] = $this->input->post('potential_2019');
		$data['potential_2020'] = $this->input->post('potential_2020');
		$data['potential_info'] = $this->input->post('potential_info');


        //call function
        $this->M_kelembagaan->input($data);
        //redirect to page

      }
          redirect('Kelembagaan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/kelembagaan/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '10240'; //maksimum besar file 2M
      $config['max_width']  = '3000'; //lebar maksimum 1288 px
      $config['max_height']  = '3000'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'kelembagaan_id' =>$this->input->post('kelembagaan_id'),
                 // 'news_image' =>$gbr['file_name'],
                 'potential_institute' =>$this->input->post('potential_institute'),
                  'potential_2016' =>$this->input->post('potential_2016'),
                  'potential_2017' =>$this->input->post('potential_2017'),
                  'potential_2018' =>$this->input->post('potential_2018'),
                  'potential_2019' =>$this->input->post('potential_2019'),
				  'potential_2020' =>$this->input->post('potential_2020'),
				  'potential_info' =>$this->input->post('potential_info'),

               );
               $this->M_kelembagaan->edit($data);
           }
       }

       else
       {

         $data['kelembagaan_id'] = $this->input->post('kelembagaan_id');
         $data['potential_2016'] = $this->input->post('potential_2016');
        $data['potential_2017'] = $this->input->post('potential_2017');
        $data['potential_2018'] = $this->input->post('potential_2018');
        $data['potential_2019'] = $this->input->post('potential_2019');
		$data['potential_2020'] = $this->input->post('potential_2020');
		$data['potential_info'] = $this->input->post('potential_info');
       //call function
       $this->M_kelembagaan->edit($data);
       //redirect to page

     }
         redirect('Kelembagaan'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('kelembagaan_id')!="") {
            $this->M_kelembagaan->delete($this->input->post('kelembagaan_id'));
        }
        redirect('Kelembagaan');

    }

}
?>
