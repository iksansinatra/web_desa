<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berkas extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_berkas");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['berkas']=$this->M_berkas->tampil_data_berkas();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("berkas",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/berkas/'; //path folder
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
               
				'berkas_image' =>$gbr['file_name'],
                  'berkas_name' =>$this->input->post('berkas_name'),
				  'berkas_desc' =>$this->input->post('berkas_desc'),
                    );
                $this->M_berkas->input($data);
            }
        }

        else
        {
        $data['berkas_name'] = $this->input->post('berkas_name');
        $data['berkas_desc'] = $this->input->post('berkas_desc');
        $data['berkas_image'] = $this->input->post('berkas_image');

        //call function
        $this->M_berkas->input($data);
        //redirect to page

      }
          redirect('Berkas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/berkas/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/berkas/'.$this->input->post('berkas_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'berkas_id' =>$this->input->post('berkas_id'),
				'berkas_image' =>$gbr['file_name'],
                 'berkas_name' =>$this->input->post('berkas_name'),
                 'berkas_desc' =>$this->input->post('berkas_desc'),
                     );
                 $this->M_berkas->edit($data);
             }
         }

         else
         {
           $data['berkas_id'] = $this->input->post('berkas_id');
           $data['berkas_name'] = $this->input->post('berkas_name');
           $data['berkas_desc'] = $this->input->post('berkas_desc');
           $data['berkas_image'] = $this->input->post('berkas_image');
         //call function
         $this->M_berkas->edit($data);
         //redirect to page

        }
           redirect('Berkas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/berkas/'.$this->input->post('berkas_image'));
            $this->M_berkas->delete($this->input->post('berkas_id'));
        redirect('Berkas');

    }
}
?>
