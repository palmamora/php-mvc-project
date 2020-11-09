<?php

namespace models;

class Dashboard extends \Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function xhrInsert()
    {
        $_POST['text'];
        $text = (isset($_POST['text'])) ? $_POST['text'] : '';

        if ($text == '') {
            return false;
        } else {
            $stmt = $this->db->prepare('INSERT INTO data(text) VALUES(?);');
            $stmt->bind_param('s', $text);
            $stmt->execute();
            $data = array('text'=>$text, 'id'=>$this->db->insert_id);
            return json_encode($data);
        }
        return false;
    }

    public function xhrGetList(){
        $rs = $this->db->query('SELECT * FROM data;');
        $data = array();
        $cont = 0;
        while($row = $rs->fetch_assoc()){
            $data[$cont] = $row;
            $cont+=1;
        }
        return json_encode($data);
        
    }

    public function xhrDelete(){
        $id = $_POST['id'];
        $stmt = $this->db->prepare("DELETE FROM data WHERE id=(?);");
        $stmt->bind_param('i', $id);
        $rs = $stmt->execute();
        return json_encode($rs);

    }
}
