<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pekerjaan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_job', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_job");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_job");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pekerjaan() {
        $query  = $this->db->query("select * from table_job");
        return $query->result();
    }

    public function tampil_data_pekerjaan1() {
          $query  = $this->db->query("select * from table_jobscategory");
          return $query->result();
      }

      public function tampil_data_pekerjaan2() {
            $this->db->select('*');
            $this->db->from('table_job');
            $this->db->join('table_jobscategory', 'table_jobscategory.jobscategory_id = table_job.jobscategory_id');

            $query = $this->db->get();
            return $query->result();
        }

	public function edit($data) {
        $this->db->update('table_job', $data, array('job_id'=>$data['job_id']));
    }

    public function delete($id) {
        $this->db->delete('table_job', array('job_id' => $id));
    }

}
?>
