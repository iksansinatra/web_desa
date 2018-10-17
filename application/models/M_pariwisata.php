<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pariwisata extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pariwisata', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pariwisata");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pariwisata");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pariwisata() {
        $query  = $this->db->query("select * from table_pariwisata");
        return $query->result();
    }

	public function tampil_detail_pariwisata($id) {
        $query  = $this->db->query("select * from table_pariwisata where pariwisata_id='$id'");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_pariwisata', $data, array('pariwisata_id'=>$data['pariwisata_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pariwisata', array('pariwisata_id' => $id));
    }

}
?>
