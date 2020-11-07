<?php

namespace models;

use Session;

class Login extends \Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth()
    {
        //arreglar esto
        $username = (isset($_POST['username'])) ? $_POST['username'] : '';
        $password = (isset($_POST['password'])) ? md5($_POST['password']) : '';
        if ($username == '' || $password == '') {
            return false;
        } else {
            $stmt = $this->db->prepare('SELECT * FROM users WHERE email=(?) AND password=(?);');
            $stmt->bind_param('ss', $username, $password);
            $stmt->execute();
            $rs = $stmt->get_result();
            if (($rs->num_rows) === 1) {
                Session::start();
                Session::set('logged', true);
                Session::set('username', $username);
                return true;
            } else {
                return false;
            }
        }
        return false;
    }
}
