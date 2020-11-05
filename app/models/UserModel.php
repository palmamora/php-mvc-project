<?php
require_once '../db/db.php';

class UserModel
{
    public function __construct()
    {

    }

    private function getUserByEmail($email)
    {
        $sql = 'SELECT * FROM users WHERE email=?';
        $conn->
    }
}
