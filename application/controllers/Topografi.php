<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Topografi extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_topografi");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['topografi']=$this->M_topografi->tampil_data_topografi();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("topografi",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/topografi/'; //path folder
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
               
				'topografi_image' =>$gbr['file_name'],
                  'topografi_name' =>$this->input->post('topografi_name'),
				  'topografi_desc' =>$this->input->post('topografi_desc'),
                    );
                $this->M_topografi->input($data);
            }
        }

        else
        {
        $data['topografi_name'] = $this->input->post('topografi_name');
        $data['topografi_desc'] = $this->input->post('topografi_desc');
        $data['topografi_image'] = $this->input->post('topografi_image');

        //call function
        $this->M_topografi->input($data);
        //redirect to page

      }
          redirect('Topografi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/topografi/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '102400'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['gambar']['name'])
         {
          unlink('./assets/topografi/'.$this->input->post('topografi_image'));
             if ($this->upload->do_upload('gambar'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'topografi_id' =>$this->input->post('topografi_id'),
				'topografi_image' =>$gbr['file_name'],
                 'topografi_name' =>$this->input->post('topografi_name'),
                 'topografi_desc' =>$this->input->post('topografi_desc'),
                     );
                 $this->M_topografi->edit($data);
             }
         }

         else
         {
           $data['topografi_id'] = $this->input->post('topografi_id');
           $data['topografi_name'] = $this->input->post('topografi_name');
           $data['topografi_desc'] = $this->input->post('topografi_desc');
           $data['topografi_image'] = $this->input->post('topografi_image');
         //call function
         $this->M_topografi->edit($data);
         //redirect to page

        }
           redirect('Topografi'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

        unlink('./assets/topografi/'.$this->input->post('topografi_image'));
            $this->M_topografi->delete($this->input->post('topografi_id'));
        
        redirect('Topografi');

    }
}
?>
