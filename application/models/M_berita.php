<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_berita extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('table_news', $data);
    }

	public function tampil_data_berita() {

        $query  = $this->db->query("select * from table_news");
        return $query->result();
    }

    public function tampil_data_berita1() {
          $query  = $this->db->query("select * from table_newscategory");
          return $query->result();
      }

  	public function tampil_data_berita2() {
          $this->db->select('*');
          $this->db->from('table_newscategory');
          $this->db->join('table_news', 'table_newscategory.newscategory_id = table_news.newscategory_id');

          $query = $this->db->get();
          return $query->result();
      }



	public function edit($data) {
        $this->db->update('table_news', $data, array('news_id'=>$data['news_id']));
    }

    public function delete($id) {
        $this->db->delete('table_news', array('news_id' => $id));
    }


}
?>
