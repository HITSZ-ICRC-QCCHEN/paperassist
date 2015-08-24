<?php
class Word_model extends CI_Model
{

    var $table = 'word';

    function __construct()
    {
        parent::__construct();
    }

    public function set_word( $temp_word )
    {
        $this->db->insert($this->table, $temp_word);
        return $this->db->insert_id();
    }

    public function get_word( $is_checked )
    {
        $this->db->order_by('semantic_id', 'ASC');
        $query = $this->db->get_where($this->table, array('is_checked' => $is_checked));
        return $query->result();
    }

    public function is_word_checked( $id ) {
        $query = $this->db->select('is_checked')->from($this->table)->where('id',$id)->get();
        return ($query->result() == 1);
    }

    public function check_word( $id, $statement, $pass )
    {
        if($pass == 1) {
            $this->db->update($this->table,
                array('statement' => $statement, 'is_checked' => 1),
                array('id' => $id));
        }else {
            $this->db->update($this->table, array('is_checked' => -1), array('id' => $id));
        }
    }

}