<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tarjih extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tarjih', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tarjih");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tarjih");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_tarjih() {
        $query  = $this->db->query("select * from table_tarjih");
        return $query->result();
    }

    public function tampil_data_tarjih1() {
          $query  = $this->db->query("select * from table_tarjihcategory");
          return $query->result();
      }

    public function tampil_data_tarjih2() {
          $this->db->select('*');
          $this->db->from('table_tarjih');
          $this->db->join('table_tarjihcategory', 'table_tarjih.tarjihcategory_id = table_tarjihcategory.tarjihcategory_id');

          $query = $this->db->get();
          return $query->result();
      }

	public function edit($data) {
        $this->db->update('table_tarjih', $data, array('tarjih_id'=>$data['tarjih_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tarjih', array('tarjih_id' => $id));
    }

}
?>
