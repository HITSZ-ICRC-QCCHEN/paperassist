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

    public function query_sentence( $querytext){
        $data[0]="%".$querytext."%";
        $data[1]='1';
        $sql1="select distinct semantic_id from $this->table where statement LIKE ? and is_checked=?";
        $sql2="select * from $this->table where semantic_id=? and is_checked=?";
        $res=$this->db->query($sql1,$data);
        $semantic_id=$res->result();
        $length=count($semantic_id);
        $sentence=array();
        for($i=0;$i<$length;$i++) {
            $data[0]=$semantic_id[$i]->semantic_id;
            $res=$this->db->query($sql2,$data);
            $sentence[$i]=$res->result();
        }
        return $sentence;
    }
}
?>

