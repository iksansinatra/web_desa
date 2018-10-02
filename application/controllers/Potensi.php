<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Potensi extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_potensi");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['potensi']=$this->M_potensi->tampil_data_potensi();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("potensi",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/potensi/'; //path folder
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
               
				'potensi_image' =>$gbr['file_name'],
                  'potensi_name' =>$this->input->post('potensi_name'),
				  'potensi_desc' =>$this->input->post('potensi_desc'),
                    );
                $this->M_potensi->input($data);
            }
        }

        else
        {
        $data['potensi_name'] = $this->input->post('potensi_name');
        $data['potensi_desc'] = $this->input->post('potensi_desc');
        $data['potensi_image'] = $this->input->post('potensi_image');

        //call function
        $this->M_potensi->input($data);
        //redirect to page

      }
          redirect('Potensi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/potensi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/potensi/'.$this->input->post('potensi_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'potensi_id' =>$this->input->post('potensi_id'),
				'potensi_image' =>$gbr['file_name'],
                 'potensi_name' =>$this->input->post('potensi_name'),
                 'potensi_desc' =>$this->input->post('potensi_desc'),
                     );
                 $this->M_potensi->edit($data);
             }
         }

         else
         {
           $data['potensi_id'] = $this->input->post('potensi_id');
           $data['potensi_name'] = $this->input->post('potensi_name');
           $data['potensi_desc'] = $this->input->post('potensi_desc');
           $data['potensi_image'] = $this->input->post('potensi_image');
         //call function
         $this->M_potensi->edit($data);
         //redirect to page

        }
           redirect('Potensi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {
      unlink('./assets/potensi/'.$this->input->post('potensi_image'));
            $this->M_potensi->delete($this->input->post('potensi_id'));
        redirect('Potensi');

    }
}
?>
