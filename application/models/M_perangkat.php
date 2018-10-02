<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perangkat extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('table_perangkat', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_perangkat");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_perangkat");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_perangkat() {

        $query  = $this->db->query("select * from table_perangkat");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_perangkat', $data, array('perangkat_id'=>$data['perangkat_id']));
    }

    public function delete($id) {
        $this->db->delete('table_perangkat', array('perangkat_id' => $id));
    }


}
?>
