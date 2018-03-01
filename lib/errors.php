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
        case E_OK: return "Everything works fine. Just, don't worry about it";
        case E_MYSQLIQUERY: return "Sorry, something's wrong with our database. For more information, please check FAQs or contact server administrators";
        case E_EMAILNOTEXISTS: return "Sorry, we couldn't find your email address in our database. For more information, please check FAQs or contact server administrators"
        case E_EMAILNOTUNIQUE: return "More than one email found in our database. For more information, please check FAQs or contact server administrators";
        case E_PRODUCTNOTEXISTS: return "Product you selected not found. For more information, please check FAQs or contact server administrators";
        case E_PRODUCTNOTUNIQUE: return "There are more than one product code found in our database. For more information, please check FAQs or contact server administrators";
        case E_ORDERMISMATCH: return "Your order information doesn't match the information we have in our database. For more information, please check FAQs or contact server administrators";
        case S_NOTYETCONFIRMED: return "You haven't confirmed you order yet. For more information, please check FAQs or contact server administrators";
        case S_EMAILCONFIRMED: return "Your order is waiting to be processed. For more information, please check FAQs or contact server administrators";
        case S_PROCESSING: return "Your order is being processed. Usually check your email";
        case S_SUCCESSFULLY: return "Your order is marked as successfully. For more information, please check FAQs or contact server administrators";
        case S_UNSUCCESSFULLY: return "Your order was UNSUCCESSFULLY PROCESSED. For more information, please check FAQs or contact server administrators";
        
        default:
            return "An unknown error just happened. Contact administrators for more information.";
}
?>