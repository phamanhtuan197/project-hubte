<?php
function db_connect()
{
    $ret = array();
    $ret['error_code'] = E_OK;
}
function countChars ($string, $char)
{
    $ret = 0;
    for ($i = 0; $i < strlen($string); ++$i)
    {
        $ret += $string[$i] == $char ? 1:0;
    }
    return $ret;
}
function validate ($category, $value)
{
    if ($category == "email")
    {
        if (countChars($value, '@') == 1)
        {
            for ($i = 0; $i < strlen($value); ++$i)
            {
                $c = ord($value[$i]);
                if (ord ('a') <= c && c <= ord('z')){}
                else if (ord('A') <= c && c <= ord('Z')) {}
                else if ($c == ord('@') || $c == ord('_') || $c == ord('.')) {}
                else return false;
            }
        }
        else 
            return false;
    }
    if ($category == 'password')
    {
        //TODO validate password
        if (strlen($value) < 8) return false;
        for ($i = 0; $i < strlen($value); $i ++)
        {
            $c = ord($value[$i]);
            if (ord ('a') <= c && c <= ord('z')){}
            else if (ord('A') <= c && c <= ord('Z')) {}
            else if ($c == ord('@') || $c == ord('_') || $c == ord('.')) {}
            else return false;
        }
    }
    return true;
}
?>