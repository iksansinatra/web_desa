<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perangkat extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perangkat");
        $this->load->helper(array('form', 'url'));
    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{

            $data['perangkat']=$this->M_perangkat->tampil_data_perangkat();
            // $data['kategori']=$this->M_perangkat->tampil_data_perangkat1();
            // $data['kategori1']=$this->M_perangkat->tampil_data_perangkat2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("perangkat",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perangkat/'; //path folder
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
                  'perangkat_image' =>$gbr['file_name'],
                  'perangkat_name' =>$this->input->post('perangkat_name'),
                  'perangkat_text' =>$this->input->post('perangkat_text'),
                  'perangkat_place' =>$this->input->post('perangkat_place'),
                  'perangkat_date' =>$this->input->post('perangkat_date'),
                  'perangkat_sk' =>$this->input->post('perangkat_sk'),
                  // 'perangkatcategory_id' =>$this->input->post('perangkatcategory_id'),
                );
                $this->M_perangkat->input($data);
            }
        }
        else
        {
        $data['perangkat_name'] = $this->input->post('perangkat_name');
        $data['perangkat_text'] = $this->input->post('perangkat_text');
        $data['perangkat_place'] = $this->input->post('perangkat_place');
        $data['perangkat_sk'] = $this->input->post('perangkat_sk');
        $data['perangkat_date'] = $this->input->post('perangkat_date');
        $data['perangkat_image'] = "blank.jpg";
       /*  $data['perangkatcategory_id'] = $this->input->post('perangkatcategory_id'); */


        //call function
        $this->M_perangkat->input($data);
        //redirect to page

      }
          redirect('Perangkat'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
      $this->load->library('upload');
      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/perangkat/'; //path folder
      $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|docx|doc|xls|xlsx|pdf'; //type yang dapat diakses bisa anda sesuaikan
      $config['max_size'] = '102400'; //maksimum besar file 2M
      // $config['max_width']  = '3000'; //lebar maksimum 1288 px
      // $config['max_height']  = '3000'; //tinggi maksimu 768 px
      $config['file_name'] = $nmfile; //nama yang terupload nantinya

      $this->upload->initialize($config);

      if($_FILES['gambar']['name'])
       {
        unlink('./assets/perangkat/'.$this->input->post('perangkat_image'));
           if ($this->upload->do_upload('gambar'))
           {
               $gbr = $this->upload->data();
               $data = array(
                 'perangkat_id' =>$this->input->post('perangkat_id'),
                 'perangkat_image' =>$gbr['file_name'],
                 'perangkat_name' =>$this->input->post('perangkat_name'),
                 'perangkat_text' =>$this->input->post('perangkat_text'),
                 'perangkat_place' =>$this->input->post('perangkat_place'),
                 'perangkat_date' =>$this->input->post('perangkat_date'),
                 'perangkat_sk' =>$this->input->post('perangkat_sk'),
               );
               $this->M_perangkat->edit($data);
           }
       }

       else
       {

         $data['perangkat_id'] = $this->input->post('perangkat_id');
         $data['perangkat_name'] = $this->input->post('perangkat_name');
         $data['perangkat_text'] = $this->input->post('perangkat_text');
         $data['perangkat_place'] = $this->input->post('perangkat_place');
         $data['perangkat_date'] = $this->input->post('perangkat_date');
         $data['perangkat_sk'] = $this->input->post('perangkat_sk');
         $data['perangkat_image'] = $this->input->post('perangkat_image');
         // $data['perangkatcategory_id'] = $this->input->post('perangkatcategory_id');
       //call function
       $this->M_perangkat->edit($data);
       //redirect to page

     }
         redirect('Perangkat'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

unlink('./assets/perangkat/'.$this->input->post('perangkat_image'));
            $this->M_perangkat->delete($this->input->post('perangkat_id'));
        redirect('Perangkat');

    }

}
?>
