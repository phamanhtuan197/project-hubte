<?php

define ("E_OK", 0); // means everything ok
define ("E_FAILED", 1); // something's wrong, but I don't know what happened

function getErrorMessage($error_code)
{
    switch ($error_code):
        default:
            return "An unknown error just happened.";
}
?>