<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tips extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jobtips', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jobtips");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jobtips");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_tips() {
        $query  = $this->db->query("select * from table_jobtips");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_jobtips', $data, array('jobstips_id'=>$data['jobstips_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jobtips', array('jobstips_id' => $id));
    }

}
?>
