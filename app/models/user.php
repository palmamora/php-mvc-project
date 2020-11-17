<?php
namespace models;

class User extends \Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUsers(){
        $rs = $this->db->query('SELECT * FROM users;');
        //$data = array();
        //$cont = 0;
        //while($row = $rs->fetch_assoc()){
         //   $data[$cont] = $row;
        //  $cont+=1;
        //}
        //return json_encode($data);
        return $rs;
    }

    public function create(){

    }

    public function edit(){

    }
    public function delete(){

    }


}
?>