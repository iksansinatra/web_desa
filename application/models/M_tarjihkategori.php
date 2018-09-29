<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tarjihkategori extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tarjihcategory', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tarjihcategory");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tarjihcategory");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_tarjihkategori() {
        $query  = $this->db->query("select * from table_tarjihcategory");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_tarjihcategory', $data, array('tarjihcategory_id'=>$data['tarjihcategory_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tarjihcategory', array('tarjihcategory_id' => $id));
    }

}
?>
