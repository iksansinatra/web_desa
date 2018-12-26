<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_usia extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('table_usia', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_usia");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_usia");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_usia() {

        $query  = $this->db->query("select * from table_usia");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_usia', $data, array('usia_id'=>$data['usia_id']));
    }

    public function delete($id) {
        $this->db->delete('table_usia', array('usia_id' => $id));
    }


}
?>
