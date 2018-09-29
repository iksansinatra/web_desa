<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_foto extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_image', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_image");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_image");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_foto() {
        $query  = $this->db->query("select * from table_image");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_image', $data, array('image_id'=>$data['image_id']));
    }

    public function delete($id) {
        $this->db->delete('table_image', array('image_id' => $id));
    }

}
?>
