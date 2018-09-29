<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_link extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_link', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_link");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_link");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_link() {
        $query  = $this->db->query("select * from table_link");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_link', $data, array('link_id'=>$data['link_id']));
    }

    public function delete($id) {
        $this->db->delete('table_link', array('link_id' => $id));
    }

}
?>
