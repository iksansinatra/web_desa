<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ekonomi extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('ekonomi', $data);
    }

    public function record_count() {
        return $this->db->count_all("ekonomi");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("ekonomi");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_ekonomi() {
        $query  = $this->db->query("select * from ekonomi");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('ekonomi', $data, array('id_ekonomi'=>$data['id_ekonomi']));
    }

    public function delete($id) {
        $this->db->delete('ekonomi', array('id_ekonomi' => $id));
    }

}
?>
