<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Foto extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_foto");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['foto']=$this->M_foto->tampil_data_foto();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("foto",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/foto/'; //path folder
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
               
				'image_file' =>$gbr['file_name'],
                  'image_name' =>$this->input->post('image_name'),
				  'image_desc' =>$this->input->post('image_desc'),
                    );
                $this->M_foto->input($data);
            }
        }

        else
        {
        $data['image_name'] = $this->input->post('image_name');
        $data['image_desc'] = $this->input->post('image_desc');
        $data['image_file'] = $this->input->post('image_file');

        //call function
        $this->M_foto->input($data);
        //redirect to page

      }
          redirect('Foto'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
      
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/foto/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/foto/'.$this->input->post('image_file'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'image_id' =>$this->input->post('image_id'),
				'image_file' =>$gbr['file_name'],
                 'image_name' =>$this->input->post('image_name'),
                 'image_desc' =>$this->input->post('image_desc'),
                   // 'gambar' =>$gbr['file_name'],
                  // 'id_fakultas' =>$this->input->post('id_fakultas'),
                  // 'nama' =>$this->input->post('nama'),
                  // 'ket' =>$this->input->post('ket'),


                     );

                 $this->M_foto->edit($data);
             }
         }

         else
         {
           $data['image_id'] = $this->input->post('image_id');
           $data['image_name'] = $this->input->post('image_name');
           $data['image_desc'] = $this->input->post('image_desc');
           $data['image_file'] = $this->input->post('image_file');
         //call function
         $this->M_foto->edit($data);
         //redirect to page

        }
           redirect('Foto'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {
      unlink('./assets/foto/'.$this->input->post('image_file'));
            $this->M_foto->delete($this->input->post('image_id'));
        redirect('Foto');

    }
}
?>
