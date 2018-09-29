<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_lecturer', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_lecturer");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_lecturer");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_dosen() {
        $query  = $this->db->query("select * from table_lecturer");
        return $query->result();
    }

    public function tampil_data_dosen1() {
          $query  = $this->db->query("select * from table_major");
          return $query->result();
      }

  	public function tampil_data_dosen2() {
          $this->db->select('*');
          $this->db->from('table_lecturer');
          $this->db->join('table_major', 'table_major.major_id = table_lecturer.major_id');

          $query = $this->db->get();
          return $query->result();
      }

	public function edit($data) {
        $this->db->update('table_lecturer', $data, array('lecturer_id'=>$data['lecturer_id']));
    }

    public function delete($id) {
        $this->db->delete('table_lecturer', array('lecturer_id' => $id));
    }

}
?>
