<?php
class Sentence_model extends CI_Model {

    var $table = 'sentence';

    function __construct()
    {
        parent::__construct();
        $this->load->model('semantic_model');
    }

    public function set_sentence( $english, $chinese , $checked = 0)
    {
        // 往semantic表插入一条记录
        $arr = array(
            'name' => null
        );
        $semantic_id = $this->semantic_model->set_semantic($arr);

        $arr = array(
            'statement' => $english,
            'language' => 'english',
            'semantic_id' => $semantic_id,
            'is_checked' => $checked
        );
        $this->db->insert($this->table, $arr);
        $arr = array(
            'statement' => $chinese,
            'language' => 'chinese',
            'semantic_id' => $semantic_id,
            'is_checked' => $checked
        );
        $this->db->insert($this->table, $arr);
//        return $this->db->insert_id();
    }

    public function get_sentence( $is_checked )
    {
        $this->db->order_by('semantic_id', 'ASC');
        $query = $this->db->get_where($this->table, array('is_checked' => $is_checked));
        return $query->result();
    }

    public function is_sentence_checked( $id ) {
        $query = $this->db->select('is_checked')->from($this->table)->where('id',$id)->get();
        return ($query->result() == 1);
    }

    public function check_sentence( $id, $statement, $pass )
    {
        if($pass == 1) {
            $this->db->update($this->table,
                array('statement' => $statement, 'is_checked' => 1),
                array('id' => $id));
        }else {
            $this->db->update($this->table, array('is_checked' => -1), array('id' => $id));
        }
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

