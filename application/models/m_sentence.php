<?php
class M_sentence extends CI_Model {

    var $table = 'sentence';

    function __construct()
    {
        parent::__construct();
    }

    public function set_sentence( $temp_sentence )
    {
        $this->db->insert($this->table, $temp_sentence);
        return $this->db->insert_id();
    }
}