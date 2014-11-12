<?php
/**
* administrator
*/
class admin
{

    function __construct()
    {
        session_start();
    }
    public function check_session()
    {
        if (empty($_SESSION['admin']))
        {
            return false;
        }
        else
        {
            return true;
        }
    }


}

?>