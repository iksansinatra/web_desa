<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Visi extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_visi");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['visi']=$this->M_visi->tampil_data_visi();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("visi",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/visi/'; //path folder
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
                   'visi_image' =>$gbr['file_name'],
                   'visi_tahun' =>$this->input->post('visi_tahun'),
                   'visi_visi' =>$this->input->post('visi_visi'),
                   'visi_misi' =>$this->input->post('visi_misi'),


                    );
                $this->M_visi->input($data);
            }
        }

        else
        {
        $data['visi_tahun'] = $this->input->post('visi_tahun');
        $data['visi_visi'] = $this->input->post('visi_visi');
        $data['visi_misi'] = $this->input->post('visi_misi');
        $data['visi_image'] = $this->input->post('visi_image');

        //call function
        $this->M_visi->input($data);
        //redirect to page

      }
          redirect('Visi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/visi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/visi/'.$this->input->post('visi_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(

                   'visi_id' =>$this->input->post('visi_id'),
                   'visi_image' =>$gbr['file_name'],
                   'visi_tahun' =>$this->input->post('visi_tahun'),
                   'visi_visi' =>$this->input->post('visi_visi'),
                   'visi_misi' =>$this->input->post('visi_misi'),

                     );

                 $this->M_visi->edit($data);
             }
         }

         else
         {
           $data['visi_id'] = $this->input->post('visi_id');
           $data['visi_tahun'] = $this->input->post('visi_tahun');
        $data['visi_visi'] = $this->input->post('visi_visi');
        $data['visi_misi'] = $this->input->post('visi_misi');
        $data['visi_image'] = $this->input->post('visi_image');

         //call function
         $this->M_visi->edit($data);
         //redirect to page

        }
           redirect('Visi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/visi/'.$this->input->post('visi_image'));
            $this->M_visi->delete($this->input->post('visi_id'));
        redirect('Visi');

    }
}
?>
