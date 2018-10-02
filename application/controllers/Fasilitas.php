<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fasilitas extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_fasilitas");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['fasilitas']=$this->M_fasilitas->tampil_data_fasilitas();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("fasilitas",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/fasilitas/'; //path folder
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
               
				'fasilitas_image' =>$gbr['file_name'],
                  'fasilitas_name' =>$this->input->post('fasilitas_name'),
				  'fasilitas_desc' =>$this->input->post('fasilitas_desc'),
                    );
                $this->M_fasilitas->input($data);
            }
        }

        else
        {
        $data['fasilitas_name'] = $this->input->post('fasilitas_name');
        $data['fasilitas_desc'] = $this->input->post('fasilitas_desc');
        $data['fasilitas_image'] = $this->input->post('fasilitas_image');

        //call function
        $this->M_fasilitas->input($data);
        //redirect to page

      }
          redirect('Fasilitas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/fasilitas/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/fasilitas/'.$this->input->post('fasilitas_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'fasilitas_id' =>$this->input->post('fasilitas_id'),
				'fasilitas_image' =>$gbr['file_name'],
                 'fasilitas_name' =>$this->input->post('fasilitas_name'),
                 'fasilitas_desc' =>$this->input->post('fasilitas_desc'),
                     );
                 $this->M_fasilitas->edit($data);
             }
         }

         else
         {
           $data['fasilitas_id'] = $this->input->post('fasilitas_id');
           $data['fasilitas_name'] = $this->input->post('fasilitas_name');
           $data['fasilitas_desc'] = $this->input->post('fasilitas_desc');
           $data['fasilitas_image'] = $this->input->post('fasilitas_image');
         //call function
         $this->M_fasilitas->edit($data);
         //redirect to page

        }
           redirect('Fasilitas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        unlink('./assets/fasilitas/'.$this->input->post('fasilitas_image'));
            $this->M_fasilitas->delete($this->input->post('fasilitas_id'));
        
        redirect('Fasilitas');

    }
}
?>
