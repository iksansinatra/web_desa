<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perangkat extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_perangkat', $data);
    }

	public function tampil_data_perangkat() {
        $query  = $this->db->query("select * from table_perangkat ");
        return $query->result();
    }

  // public function tampil_data_pengumuman1($id) {

          // $query  = $this->db->query("select * from table_perangkat where perangkat_id='$id'");
          // return $query->result();
      // }


	public function edit($data) {
        $this->db->update('table_perangkat', $data, array('perangkat_id'=>$data['perangkat_id']));
    }

    public function delete($id) {
        $this->db->delete('table_perangkat', array('perangkat_id' => $id));
    }

}
?>
