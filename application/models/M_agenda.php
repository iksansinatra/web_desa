<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agenda extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_agenda', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_agenda");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_agenda");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_agenda() {
        $query  = $this->db->query("select * from table_agenda");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_agenda', $data, array('agenda_id'=>$data['agenda_id']));
    }

    public function delete($id) {
        $this->db->delete('table_agenda', array('agenda_id' => $id));
    }

}
?>
