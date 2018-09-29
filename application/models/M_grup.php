<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_grup extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_groups', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_groups");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_groups");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_grup() {
        $query  = $this->db->query("select * from table_groups");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_groups', $data, array('group_id'=>$data['group_id']));
    }

    public function delete($id) {
        $this->db->delete('table_groups', array('group_id' => $id));
    }

}
?>
