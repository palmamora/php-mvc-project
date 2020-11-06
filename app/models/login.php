<?php

namespace models;

use mysqli_stmt;

class Login extends \Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function auth()
    {
        //arreglar esto
        $link = mysqli_connect('localhost', 'root', '', 'id14855054_palmamora001', 3306);
        $query = 'SELECT * FROM users WHERE email = (?) AND password = (?);';
        $username = isset($_POST['username']) ? $_POST['username'] : 'admin';
        $password = isset($_POST['password']) ? md5($_POST['password']) : '21232f297a57a5a743894a0e4a801fc3';
        $stmt = mysqli_stmt_init($link);
        mysqli_stmt_prepare($stmt, $query);
        mysqli_stmt_bind_param($stmt, 'ss', $username, $password);
        mysqli_stmt_execute($stmt);
        $rs = mysqli_stmt_get_result($stmt);
        var_dump($rs);
        while ($fila = mysqli_fetch_array($rs, MYSQLI_NUM))
        {
            foreach ($fila as $f)
            {
                print "$f ";
            }
            print "\n";
        }

        //$row = mysqli_fetch_assoc($rs);
        //var_dump($row);

        //$rs = $stmt->execute();
        //var_dump($rs);
    }
}
