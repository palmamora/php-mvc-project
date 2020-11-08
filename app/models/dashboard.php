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
        }
        return false;
    }

    public function xhrGetList(){
        $rs = $this->db->query('SELECT * FROM data;');
        $arr = array();
        $cont = 0;
        while($row = $rs->fetch_assoc()){
            $arr[$cont] = $row;
            $cont+=1;
        }
        return json_encode($arr);
        
    }
}
