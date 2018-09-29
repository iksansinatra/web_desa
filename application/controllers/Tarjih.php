<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tarjih extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tarjih");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['tarjih']=$this->M_tarjih->tampil_data_tarjih();
          $data['kategori']=$this->M_tarjih->tampil_data_tarjih1();
          $data['kategori1']=$this->M_tarjih->tampil_data_tarjih2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("tarjih",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tarjih/'; //path folder
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
                $this->M_tarjih->input($data);
            }
        }

        else
        {
        $data['tarjih_name'] = $this->input->post('tarjih_name');
        $data['tarjih_desc'] = $this->input->post('tarjih_desc');
        $data['tarjihcategory_id'] = $this->input->post('tarjihcategory_id');

        //call function
        $this->M_tarjih->input($data);
        //redirect to page

      }
          redirect('Tarjih'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tarjih/'; //path folder
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

                   'id_tarjih' =>$this->input->post('id_tarjih'),
                   'gambar' =>$gbr['file_name'],
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_tarjih->edit($data);
             }
         }

         else
         {
           $data['tarjih_id'] = $this->input->post('tarjih_id');
           $data['tarjih_name'] = $this->input->post('tarjih_name');
           $data['tarjih_desc'] = $this->input->post('tarjih_desc');
           $data['tarjihcategory_id'] = $this->input->post('tarjihcategory_id');

         //call function
         $this->M_tarjih->edit($data);
         //redirect to page

        }
           redirect('Tarjih'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('tarjih_id')!="") {
            $this->M_tarjih->delete($this->input->post('tarjih_id'));
        }
        redirect('Tarjih');

    }
}
?>
