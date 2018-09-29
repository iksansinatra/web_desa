<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pertanyaan extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('pertanyaan', $data);
    }

    public function record_count() {
        return $this->db->count_all("pertanyaan");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("pertanyaan");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pertanyaan() {
        $query  = $this->db->query("select * from pertanyaan");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('pertanyaan', $data, array('id_pertanyaan'=>$data['id_pertanyaan']));
    }

    public function delete($id) {
        $this->db->delete('pertanyaan', array('id_pertanyaan' => $id));
    }

}
?>
