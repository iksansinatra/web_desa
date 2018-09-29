<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pendapatan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pendapatan', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pendapatan");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pendapatan");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pendapatan() {
        $query  = $this->db->query("select * from table_pendapatan");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_pendapatan', $data, array('pendapatan_id'=>$data['pendapatan_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pendapatan', array('pendapatan_id' => $id));
    }

}
?>
