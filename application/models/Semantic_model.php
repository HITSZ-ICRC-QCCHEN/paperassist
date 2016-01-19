<?php
class Semantic_model extends CI_Model
{

    var $table = 'semantic';

    function __construct()
    {
        parent::__construct();
    }

    public function set_semantic( $semantic )
    {
        $this->db->insert($this->table, $semantic);
        return $this->db->insert_id();
    }

//    public function get_semantic_nums()
//    {
//        return $this->db->count_all($this->table);
//    }
}