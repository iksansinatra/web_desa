<?php

require APPPATH . '/libraries/REST_Controller.php';

class Restskripsi extends REST_Controller {

    function __construct($config = 'rest') {
        parent::__construct($config);
    }

    // show data skripsi_id
    function index_get() {
        $id_skripsi = $this->get('id_skripsi');
        if ($id_skripsi == '') {
            $skripsi = $this->db->get('skripsi')->result();
        } else {
            $this->db->where('id_skripsi', $id_skripsi);
            $skripsi = $this->db->get('skripsi')->result();
        }
        $this->response($skripsi, 200);
    }

    // insert new data to data_penerimaan_id
    function index_post() {
        $data = array(
                    'data_penerimaan_id'           => $this->post('data_penerimaan_id'),
                    'tanggal'          => $this->post('tanggal'),
                    'kodeAkun'    => $this->post('kodeAkun'),
                    'saldo'        => $this->post('saldo'),
                    'TanggalUpdate'        => $this->post('TanggalUpdate'));
        $insert = $this->db->insert('data_penerimaan', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // update data data_penerimaan_id
    function index_put() {
        $data_penerimaan_id = $this->put('data_penerimaan_id');
        $data = array(

                     'data_penerimaan_id'           => $this->post('data_penerimaan_id'),
                    'tanggal'          => $this->post('tanggal'),
                    'kodeAkun'    => $this->post('kodeAkun'),
                    'saldo'        => $this->post('saldo'),
                    'TanggalUpdate'        => $this->post('TanggalUpdate'));

        $this->db->where('data_penerimaan_id', $data_penerimaan_id);
        $update = $this->db->update('data_penerimaan', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    // delete mahasiswa
    function index_delete() {
        $data_penerimaan_id = $this->delete('data_penerimaan_id');
        $this->db->where('data_penerimaan_id', $data_penerimaan_id);
        $delete = $this->db->delete('data_penerimaan');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
