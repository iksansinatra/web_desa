<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sejarah_Desa extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_sejarah_desa");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['sejarah_desa']=$this->M_sejarah_desa->tampil_data_desa();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("sejarah_desa",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/sejarah_desa/'; //path folder
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
               
        'sejarah_image' =>$gbr['file_name'],
                  'sejarah_title' =>$this->input->post('sejarah_title'),
          'sejarah_desa' =>$this->input->post('sejarah_desa'),
          'sejarah_pemerintahan' =>$this->input->post('sejarah_pemerintahan'),
                    );
                $this->M_sejarah_desa->input($data);
            }
        }

        else
        {
        $data['sejarah_title'] = $this->input->post('sejarah_title');
        $data['sejarah_desa'] = $this->input->post('sejarah_desa');
        $data['sejarah_pemerintahan'] = $this->input->post('sejarah_pemerintahan');
        $data['sejarah_image'] = $this->input->post('sejarah_image');

        //call function
        $this->M_sejarah_desa->input($data);
        //redirect to page

      }
          redirect('Sejarah_Desa'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
      
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/sejarah_desa/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/sejarah_desa/'.$this->input->post('sejarah_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'sejarah_id' =>$this->input->post('sejarah_id'),
        'sejarah_image' =>$gbr['file_name'],
                  'sejarah_title' =>$this->input->post('sejarah_title'),
          'sejarah_desa' =>$this->input->post('sejarah_desa'),
          'sejarah_pemerintahan' =>$this->input->post('sejarah_pemerintahan'),


                     );

                 $this->M_sejarah_desa->edit($data);
             }
         }

         else
         {
           $data['sejarah_id'] = $this->input->post('sejarah_id');
           $data['sejarah_title'] = $this->input->post('sejarah_title');
        $data['sejarah_desa'] = $this->input->post('sejarah_desa');
        $data['sejarah_pemerintahan'] = $this->input->post('sejarah_pemerintahan');
        $data['sejarah_image'] = $this->input->post('sejarah_image');
         //call function
         $this->M_sejarah_desa->edit($data);
         //redirect to page

        }
           redirect('Sejarah_Desa'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {
      unlink('./assets/sejarah_desa/'.$this->input->post('sejarah_image'));
            $this->M_sejarah_desa->delete($this->input->post('sejarah_id'));
        redirect('Sejarah_Desa');

    }
}
?>
