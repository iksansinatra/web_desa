<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Saran extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_saran");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
        if(!($this->session->userdata('userid'))){
            $this->load->view("login_page");
        }else{
            $data['saran']=$this->M_saran->tampil_data_saran();
            $data['kategori']=$this->M_saran->tampil_data_saran1();
            $data['kategori1']=$this->M_saran->tampil_data_saran2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("saran",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
       $this->load->library('upload');

       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/saran/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '10240'; //maksimum besar file 2M
       $config['max_width']  = '2048'; //lebar maksimum 1288 px
       $config['max_height']  = '2048'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['gambar']['name'])
        {
            if ($this->upload->do_upload('gambar'))
            {
                $gbr = $this->upload->data();
                $data = array(
                  'gambar' =>$gbr['file_name'],
                  'judul' =>$this->input->post('judul'),
                  'isi' =>$this->input->post('isi'),
                );

                $this->m_agenda->input($data);

            }
        }

        else
        {
        $data['suggestion_title'] = $this->input->post('suggestion_title');
        $data['suggestion_content'] = $this->input->post('suggestion_content');
        $data['suggestion_postdate'] = $this->input->post('suggestion_postdate');
        $data['suggestion_postime'] = $this->input->post('suggestion_postime');
        $data['suggestion_accepted'] = $this->input->post('suggestion_accepted');
        $data['user_id'] = $this->input->post('user_id');
        //call function
        $this->M_saran->input($data);
        //redirect to page

      }
          redirect('Saran'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      $this->load->library('upload');

      $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
      $config['upload_path'] = './assets/agenda/'; //path folder
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
                 'id_agenda' =>$this->input->post('id_agenda'),
                 'gambar' =>$gbr['file_name'],
                 'judul' =>$this->input->post('judul'),
                 'isi' =>$this->input->post('isi'),
               );
               $this->m_agenda->edit($data);
           }
       }

       else
       {

         $data['suggestion_id'] = $this->input->post('suggestion_id');
         $data['suggestion_title'] = $this->input->post('suggestion_title');
         $data['suggestion_content'] = $this->input->post('suggestion_content');
         $data['suggestion_postdate'] = $this->input->post('suggestion_postdate');
         $data['suggestion_postime'] = $this->input->post('suggestion_postime');
         $data['suggestion_accepted'] = $this->input->post('suggestion_accepted');
         $data['user_id'] = $this->input->post('user_id');
        //call function
       $this->M_saran->edit($data);
       //redirect to page

     }
         redirect('Saran'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('suggestion_id')!="") {
            $this->M_saran->delete($this->input->post('suggestion_id'));
        }
        redirect('Saran');
    }
}
?>
