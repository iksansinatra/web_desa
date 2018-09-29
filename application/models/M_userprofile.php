<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_userprofile extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function input($data) {
        $this->db->insert('table_userprofile', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_userprofile");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_userprofile");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_userprofile() {
        $query  = $this->db->query("select * from table_userprofile");
        return $query->result();
    }

    public function tampil_data_userprofile1() {
          $query  = $this->db->query("select * from table_groups");
          return $query->result();
      }

    public function tampil_data_userprofile2() {
          $this->db->select('*');
          $this->db->from('table_userprofile');
          $this->db->join('table_groups', 'table_groups.group_id = table_userprofile.group_id');
          $this->db->join('table_user', 'table_user.user_id = table_userprofile.user_id');

          $query = $this->db->get();
          return $query->result();
      }

      public function tampil_data_userprofile3() {
            $query  = $this->db->query("select * from table_user");
            return $query->result();
        }

	public function edit($data) {
        $this->db->update('table_userprofile', $data, array('userprofile_id'=>$data['userprofile_id']));
    }

    public function delete($id) {
        $this->db->delete('table_userprofile', array('userprofile_id' => $id));
    }

}
?>
