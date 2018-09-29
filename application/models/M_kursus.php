<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kursus extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_course', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_course");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_course");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kursus() {
        $query  = $this->db->query("select * from table_course");
        return $query->result();
    }

    public function tampil_data_kursus1() {
          $query  = $this->db->query("select * from table_major");
          return $query->result();
      }

    public function tampil_data_kursus2() {
          $this->db->select('*');
          $this->db->from('table_course');
          $this->db->join('table_major', 'table_course.major_id = table_major.major_id');

          $query = $this->db->get();
          return $query->result();
      }

	public function edit($data) {
        $this->db->update('table_course', $data, array('course_id'=>$data['course_id']));
    }

    public function delete($id) {
        $this->db->delete('table_course', array('course_id' => $id));
    }

}
?>
