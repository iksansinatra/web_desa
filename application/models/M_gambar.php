<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gambar extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('gambar', $data);
    }

	public function tampil_data_gambar() {
        $query  = $this->db->query("select * from gambar");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('gambar', $data, array('id_gambar'=>$data['id_gambar']));
    }

    public function delete($id) {
        $this->db->delete('gambar', array('id_gambar' => $id));
    }

}
?>
