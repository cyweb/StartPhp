<?php
/**
* page
*/
class page
{

    public function check($session=false)
    {
            if ( (empty($_GET['page'])) || $session==false )
            {
                return "login";
            }
            else if( (empty($_GET['page'])) && $session==true )
            {
                return "main";
            }
    }


}

?>