<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_saran extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_suggestion', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_suggestion");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_suggestion");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_saran() {
        $query  = $this->db->query("select * from table_suggestion");
        return $query->result();
    }

    public function tampil_data_saran1() {
          $query  = $this->db->query("select * from table_user");
          return $query->result();
      }

    public function tampil_data_saran2() {
          $this->db->select('*');
          $this->db->from('table_user');
          $this->db->join('table_suggestion', 'table_suggestion.user_id = table_user.user_id');

          $query = $this->db->get();
          return $query->result();
      }

	public function edit($data) {
        $this->db->update('table_suggestion', $data, array('suggestion_id'=>$data['suggestion_id']));
    }

    public function delete($id) {
        $this->db->delete('table_suggestion', array('suggestion_id' => $id));
    }

}
?>
