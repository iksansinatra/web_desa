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
        $query  = $this->db->query("select * from table_image");
        return $query->result();
    }


	public function tampil_semua_data() {
        $query  = $this->db->query("select * from table_kegiatan GROUP BY image_id DESC");
        return $query->result();
    }



	public function tampil_berita_terkini() {
        $query  = $this->db->query("select * from table_news GROUP BY news_id DESC limit 6");
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
