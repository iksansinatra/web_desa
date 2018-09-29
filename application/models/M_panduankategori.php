<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_panduankategori extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_guidecategory', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_guidecategory");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_guidecategory");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_panduankategori() {
        $query  = $this->db->query("select * from table_guidecategory");
        return $query->result();
    }


	public function edit($data) {
        $this->db->update('table_guidecategory', $data, array('guidecategory_id'=>$data['guidecategory_id']));
    }

    public function delete($id) {
        $this->db->delete('table_guidecategory', array('guidecategory_id' => $id));
    }

}
?>
