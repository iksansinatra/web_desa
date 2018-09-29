<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_video extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_video', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_video");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_video");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_video() {
        $query  = $this->db->query("select * from table_video");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_video', $data, array('video_id'=>$data['video_id']));
    }

    public function delete($id) {
        $this->db->delete('table_video', array('video_id' => $id));
    }

}
?>
