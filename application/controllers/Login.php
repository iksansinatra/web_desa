<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
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
//$username =  $postdata->username;
//$password = md5($postdata->password);
// $username = 'alan321';// $postdata->username;
// $password = md5('alan321');//md5($postdata->password);


  $username = $this->input->post('username');
  $password = md5($this->input->post('password'));



  $query  = $this->db->query("select * from user where username='$username' and password='$password'");


//$sql = "select * from user where username='$username' and password='$password' ";
//         include'../koneksi.php';
      if($query->num_rows()>0){
                echo json_encode($query->result());
                 // echo 'berhasil';
      }
      else
      {
        echo json_encode('gagal');
      }

      }
        else{
        echo json_encode('GET');
        }

  }

}
?>
