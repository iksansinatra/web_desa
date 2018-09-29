<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_beritakategori extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_newscategory', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_newscategory");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_newscategory");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_beritakategori() {
        $query  = $this->db->query("select * from table_newscategory");
        return $query->result();
    }


	public function edit($data) {
        $this->db->update('table_newscategory', $data, array('newscategory_id'=>$data['newscategory_id']));
    }

    public function delete($id) {
        $this->db->delete('table_newscategory', array('newscategory_id' => $id));
    }

}
?>
