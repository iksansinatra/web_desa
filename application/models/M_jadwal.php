<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jadwal extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('jadwal', $data);
    }

	public function tampil_data_jadwal() {
        $query  = $this->db->query("select * from jadwal");
        return $query->result();
    }
/*
  public function tampil_data_pengumuman1($id) {

          $query  = $this->db->query("select * from pengumuman where id_pengumuman='$id'");
          return $query->result();
      }
*/

	public function edit($data) {
        $this->db->update('jadwal', $data, array('id_jadwal'=>$data['id_jadwal']));
    }

    public function delete($id) {
        $this->db->delete('jadwal', array('id_jadwal' => $id));
    }

}
?>
