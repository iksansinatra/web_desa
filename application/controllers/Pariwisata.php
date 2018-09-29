<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pariwisata extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pariwisata");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['pariwisata']=$this->M_pariwisata->tampil_data_pariwisata();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("pariwisata",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pariwisata/'; //path folder
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
               
				'pariwisata_image' =>$gbr['file_name'],
                  'pariwisata_name' =>$this->input->post('pariwisata_name'),
				  'pariwisata_desc' =>$this->input->post('pariwisata_desc'),
                    );
                $this->M_pariwisata->input($data);
            }
        }

        else
        {
        $data['pariwisata_name'] = $this->input->post('pariwisata_name');
        $data['pariwisata_desc'] = $this->input->post('pariwisata_desc');
        $data['pariwisata_image'] = $this->input->post('pariwisata_image');

        //call function
        $this->M_pariwisata->input($data);
        //redirect to page

      }
          redirect('Pariwisata'); //jika berhasil maka akan ditampilkan view vupload
    }
    // public function input() {
       // $this->load->library('upload');
       // $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       // $config['upload_path'] = './assets/foto_kegiatan/'; //path folder
       // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       // $config['max_size'] = '102400'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       // $config['file_name'] = $nmfile; //nama yang terupload nantinya

       // $this->upload->initialize($config);

       // if($_FILES['gambar']['name'])
        // {
            // if ($this->upload->do_upload('gambar'))
            // {
                // $gbr = $this->upload->data();
                // $data = array(
               
				// 'image_file' =>$gbr['file_name'],
                  // 'image_name' =>$this->input->post('image_name'),
				  // 'image_desc' =>$this->input->post('image_desc'),
                    // );
                // $this->M_foto_kegiatan->input($data);
            // }
        // }

        // else
        // {
        // $data['image_name'] = $this->input->post('image_name');
        // $data['image_desc'] = $this->input->post('image_desc');
        // $data['image_file'] = $this->input->post('image_file');

        // call function
        // $this->M_foto_kegiatan->input($data);
        // redirect to page

      // }
          // redirect('Foto_Kegiatan'); //jika berhasil maka akan ditampilkan view vupload
    // }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pariwisata/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'pariwisata_id' =>$this->input->post('pariwisata_id'),
				'pariwisata_image' =>$gbr['file_name'],
                 'pariwisata_name' =>$this->input->post('pariwisata_name'),
                 'pariwisata_desc' =>$this->input->post('pariwisata_desc'),
                   // 'gambar' =>$gbr['file_name'],
                  // 'id_fakultas' =>$this->input->post('id_fakultas'),
                  // 'nama' =>$this->input->post('nama'),
                  // 'ket' =>$this->input->post('ket'),


                     );

                 $this->M_pariwisata->edit($data);
             }
         }

         else
         {
           $data['pariwisata_id'] = $this->input->post('pariwisata_id');
           $data['pariwisata_name'] = $this->input->post('pariwisata_name');
           $data['pariwisata_desc'] = $this->input->post('pariwisata_desc');
         //call function
         $this->M_pariwisata->edit($data);
         //redirect to page

        }
           redirect('Pariwisata'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('pariwisata_id')!="") {
            $this->M_pariwisata->delete($this->input->post('pariwisata_id'));
        }
        redirect('Pariwisata');

    }
}
?>
