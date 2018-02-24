<?php

define ("E_OK", 100); // means everything ok
define ("E_FAILED", 101); // something's wrong, but I don't know what happened

define ("S_NOTYETCONFIRMED", 0);
define ("S_EMAILCONFIRMED", 1);
define ("S_PROCESSING", 2);
define ("S_SUCCESSFULLY", 3);
define ("S_UNSUCCESSFULLY", 4);

function getErrorMessage($error_code)
{
    switch ($error_code):
        default:
            return "An unknown error just happened.";
}
?>