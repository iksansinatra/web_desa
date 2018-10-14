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

    public function record_count() {
        return $this->db->count_all("table_news");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_news");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_berita() {

        $query  = $this->db->query("select * from table_news GROUP BY news_id DESC");
        return $query->result();
    }

	public function tampil_detail_berita($id) {

        $query  = $this->db->query("select * from table_news where news_id='$id'");
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
