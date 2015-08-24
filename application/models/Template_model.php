<?php
class Template_model extends CI_Model
{

    var $table = 'template';

    function __construct()
    {
        parent::__construct();
    }

    public function set_template( $temp_template )
    {
        $this->db->insert($this->table, $temp_template);
        return $this->db->insert_id();
    }

    public function get_template( $is_checked ) {
        $query = $this->db->get_where($this->table, array('is_checked' => $is_checked));
        return $query->result();
    }

    public function is_template_checked( $id ) {
//        $query = $this->db->get_where($this->table, array('id' => $id));
//        return $query->result()->is_checked == 1;
        $query = $this->db->select('is_checked')->from($this->table)->where('id',$id)->get();
        return ($query->result() == 1);
    }

    public function check_template( $id, $topic, $statement, $pass )
    {
        if($pass == 1) {
            $this->db->update($this->table,
                array('topic' => $topic, 'statement' => $statement, 'is_checked' => 1),
                array('id' => $id));
        }else {
            $this->db->update($this->table, array('is_checked' => -1), array('id' => $id));
        }
    }

}