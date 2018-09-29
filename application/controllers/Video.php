<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Video extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_video");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('userid'))){
          $this->load->view("login_page");
      }else{
          $data['video']=$this->M_video->tampil_data_video();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("video",$data);
          $this->load->view("attribute/footer");
      }
    }

    public function input() {
       $this->load->library('upload');
	   $nmfile                  = "vid-" . date('YmdHis');
    $config['upload_path']   = './assets/video/';
    $config['allowed_types'] = 'wmv|wav|mp4|3gp|flv'; 
    $config['max_size']      = '102400'; 
    $config['file_name']     = $nmfile;
       // $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       // $config['upload_path'] = './assets/video/'; //path folder
       // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
       // $config['max_size'] = '102400'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       // $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['video']['name'])
        {
            if ($this->upload->do_upload('video'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
				'video_file' =>$gbr['file_name'],
                  'video_name' =>$this->input->post('video_name'),
				  'video_desc' =>$this->input->post('video_desc'),
                    );
                $this->M_video->input($data);
            }
        }

        else
        {
        $data['video_name'] = $this->input->post('video_name');
        $data['video_desc'] = $this->input->post('video_desc');
		$data['video_file'] = $this->input->post('video_file');

        //call function
        $this->M_video->input($data);
        //redirect to page

      }
          redirect('Video'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        //get data
        $this->load->library('upload');
		unlink('./assets/video/' . $this->input->post('video_file'));
    $nmfile                  = "vid-" . date('YmdHis');
    $config['upload_path']   = './assets/video/';
    $config['allowed_types'] = 'wmv|wav|mp4|3gp|flv';
    $config['max_size']      = '102400';
    $config['file_name']     = $nmfile;
        // $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        // $config['upload_path'] = './assets/video/'; //path folder
        // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
        // $config['max_size'] = '20480'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        // $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['video']['name'])
         {
             if ($this->upload->do_upload('video'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
				'video_id' =>$this->input->post('video_id'),
				'video_file' =>$gbr['file_name'],
                 'video_name' =>$this->input->post('video_name'),
                 'video_desc' =>$this->input->post('video_desc'),
                   // 'video' =>$gbr['file_name'],
                  // 'id_fakultas' =>$this->input->post('id_fakultas'),
                  // 'nama' =>$this->input->post('nama'),
                  // 'ket' =>$this->input->post('ket'),


                     );

                 $this->M_video->edit($data);
             }
         }

         else
         {
           $data['video_id'] = $this->input->post('video_id');
           $data['video_name'] = $this->input->post('video_name');
           $data['video_desc'] = $this->input->post('video_desc');
         //call function
         $this->M_video->edit($data);
         //redirect to page

        }
           redirect('Video'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {
unlink('./assets/video/' . $this->input->post('video_file'));
    $this->M_video->delete($this->input->post('video_id'));
    redirect('Video');
        // if($this->input->post('video_id')!="") {
            // $this->M_video->delete($this->input->post('video_id'));
        // }
        // redirect('Video');

    }
}
?>
