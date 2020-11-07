<?php

class Database extends mysqli
{
    public function __construct()
    {
        parent::__construct(
            'localhost',
            'root',
            '',
            'id14855054_palmamora001',
            3306
        );
    }

}
