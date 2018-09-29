<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Agenda extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_agenda");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['agenda']=$this->M_agenda->tampil_data_agenda();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("agenda",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/agenda/'; //path folder
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
                $this->M_agenda->input($data);
            }
        }

        else
        {

        $data['agenda_name'] = $this->input->post('agenda_name');
        $data['agenda_desc'] = $this->input->post('agenda_desc');
        $data['agenda_date'] = $this->input->post('agenda_date');
        $data['agenda_time'] = $this->input->post('agenda_time');
        $data['agenda_place'] = $this->input->post('agenda_place');
        $data['agenda_organizer'] = $this->input->post('agenda_organizer');
      //  $data['gambar'] = $this->input->post('gambar');

        //call function
        $this->M_agenda->input($data);
        //redirect to page

      }
          redirect('Agenda'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
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
                   'nama' =>$this->input->post('nama'),
                   'ket' =>$this->input->post('ket'),

                     );

                 $this->M_agenda->edit($data);
             }
         }

         else
         {
           $data['agenda_id'] = $this->input->post('agenda_id');
           $data['agenda_name'] = $this->input->post('agenda_name');
           $data['agenda_desc'] = $this->input->post('agenda_desc');
           $data['agenda_date'] = $this->input->post('agenda_date');
           $data['agenda_time'] = $this->input->post('agenda_time');
           $data['agenda_place'] = $this->input->post('agenda_place');
           $data['agenda_organizer'] = $this->input->post('agenda_organizer');

         //call function
         $this->M_agenda->edit($data);
         //redirect to page

        }
           redirect('Agenda'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        if($this->input->post('agenda_id')!="") {
            $this->M_agenda->delete($this->input->post('agenda_id'));
        }
        redirect('Agenda');

    }
}
?>
