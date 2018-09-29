<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tips extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tips");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['tips']=$this->M_tips->tampil_data_tips();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("tips",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tips/'; //path folder
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
                $this->M_tips->input($data);
            }
        }

        else
        {
          $data['jobstips_name'] = $this->input->post('jobstips_name');
        $data['jobstips_desc'] = $this->input->post('jobstips_desc');

        //call function
        $this->M_tips->input($data);
        //redirect to page

      }
          redirect('Tips'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tips/'; //path folder
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

                   'id_tips' =>$this->input->post('id_tips'),
                   'gambar' =>$gbr['file_name'],
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_tips->edit($data);
             }
         }

         else
         {
           $data['jobstips_id'] = $this->input->post('jobstips_id');
           $data['jobstips_name'] = $this->input->post('jobstips_name');
         $data['jobstips_desc'] = $this->input->post('jobstips_desc');

         //call function
         $this->M_tips->edit($data);
         //redirect to page

        }
           redirect('Tips'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('jobstips_id')!="") {
            $this->M_tips->delete($this->input->post('jobstips_id'));
        }
        redirect('Tips');

    }
}
?>
