<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pekerjaankategori extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jobscategory', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jobscategory");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jobscategory");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pekerjaankategori() {
        $query  = $this->db->query("select * from table_jobscategory");
        return $query->result();
    }


	public function edit($data) {
        $this->db->update('table_jobscategory', $data, array('jobscategory_id'=>$data['jobscategory_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jobscategory', array('jobscategory_id' => $id));
    }

}
?>
