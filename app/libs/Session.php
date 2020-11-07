<?php

class Session
{
    public static function start()
    {
        session_start();
    }
    public static function destroy()
    {
        setcookie(session_name(), 0, 1, ini_get("session.cookie_path"));
        session_destroy();
    }
    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }
    public static function get($key)
    {
        return $_SESSION[$key];
    }
}
