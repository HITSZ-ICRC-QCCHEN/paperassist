<?php
class Template_model extends CI_Model {

    var $table = 'template';

    function __construct()
    {
        parent::__construct();
        $this->load->model('semantic_model');
    }

    public function set_template( $topic, $content, $checked = 0)
    {
        $arr = array(
            'name' => $topic
        );
        $semantic_id = $this->semantic_model->set_semantic($arr);
        $arr = array(
            'topic' => $topic,
            'statement' => $content,
            'semantic_id' => $semantic_id,
            'is_checked' => $checked
        );

        $this->db->insert($this->table, $arr);
//        return $this->db->insert_id();
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

    public function query_template($querytext){
        $data[0]="%".$querytext."%";
        $data[1]='1';
        $sql="select * from $this->table where topic LIKE ? and is_checked=?";
        $res=$this->db->query($sql,$data);
        return $res->result();
    }
}
?>

