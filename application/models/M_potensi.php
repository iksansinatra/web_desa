<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_potensi extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_potency', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_potency");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_potency");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_potensi() {
        $query  = $this->db->query("select * from table_potency");
        return $query->result();
    }

	public function tampil_detail_potensi($id) {
        $query  = $this->db->query("select * from table_potency where potensi_id=?", array($id));
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_potency', $data, array('potensi_id'=>$data['potensi_id']));
    }

    public function delete($id) {
        $this->db->delete('table_potency', array('potensi_id' => $id));
    }

}
?>
