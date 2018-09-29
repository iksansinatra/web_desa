<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Setuser extends CI_Controller {
    function __construct() {
        parent::__construct();
      //  $this->load->model("M_aplikasi");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
            if($_SERVER['REQUEST_METHOD'] == 'POST')
            {
      	//$postdata = file_get_contents("php://input");
      	//$postdata = json_decode($postdata);
      	//$tes = $_POST['username'];
        /*
        $phone = $postdata->phone;
        */
        $data = array(

          'username' =>$this->input->post('username'),
          'password' =>md5($this->input->post('password')),
          'nama' =>$this->input->post('nama'),
          'nim' =>$this->input->post('nim'),
          'gender' =>$this->input->post('gender'),
          'jurusan' =>$this->input->post('jurusan'),
          'email' =>$this->input->post('email'),
          'alamat' =>$this->input->post('alamat'),
          'noHp' =>$this->input->post('noHp'),
        );

          //$this->db->insert('user', $data);
          $result= $this->db->insert('user', $data);
          if($result){
                   	echo json_encode('berhasil');
          }
          else
          {
            echo json_encode('gagal');
          }
  }else{
    echo 'GET';
  }
    }

}
?>
