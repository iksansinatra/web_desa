<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_statuta extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('statuta', $data);
    }

    public function record_count() {
        return $this->db->count_all("statuta");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("statuta");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_statuta() {
        $query  = $this->db->query("select * from statuta");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('statuta', $data, array('id_statuta'=>$data['id_statuta']));
    }

    public function delete($id) {
        $this->db->delete('statuta', array('id_statuta' => $id));
    }

}
?>
