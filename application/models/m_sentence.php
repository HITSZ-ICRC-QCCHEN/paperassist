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

    public function query_sentence( $querytext ,$language){
        $data[0]="%".$querytext."%";
        $data[1]=$language;
        $data[2]='1';
        $sql="select user.user_name,$this->table.statement,$this->table.points from $this->table,user where
              $this->table.semantic_id =any(select $this->table.semantic_id from $this->table where $this->table.statement LIKE ?)
              and $this->table.language=?
              and $this->table.is_checked=?
              and user.id=$this->table.user_id";
        //echo $this->db->last_query();
        $res=$this->db->query($sql,$data);
        return $res->result();
    }
}
?>

