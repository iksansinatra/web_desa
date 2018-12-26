<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        //insert data
        $this->db->insert('table_jenis', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jenis");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jenis");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_jenis() {

        $query  = $this->db->query("select * from table_jenis");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_jenis', $data, array('jenis_id'=>$data['jenis_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jenis', array('jenis_id' => $id));
    }


}
?>
