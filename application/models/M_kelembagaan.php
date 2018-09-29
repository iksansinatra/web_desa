<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelembagaan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('table_lembaga', $data);
    }

	public function tampil_data_berita() {

        $query  = $this->db->query("select * from table_lembaga");
        return $query->result();
    }

    // public function tampil_data_berita1() {
          // $query  = $this->db->query("select * from table_newscategory");
          // return $query->result();
      // }

  	// public function tampil_data_berita2() {
          // $this->db->select('*');
          // $this->db->from('table_newscategory');
          // $this->db->join('table_news', 'table_newscategory.newscategory_id = table_news.newscategory_id');

          // $query = $this->db->get();
          // return $query->result();
      // }



	public function edit($data) {
        $this->db->update('table_lembaga', $data, array('kelembagaan_id'=>$data['kelembagaan_id']));
    }

    public function delete($id) {
        $this->db->delete('table_lembaga', array('kelembagaan_id' => $id));
    }


}
?>
