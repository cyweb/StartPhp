<?php
/**
* base model
*/
class baseModel
{

        public static function loadModel($name)
        {
            require_once 'app/model/' . strtolower($name) . '.php';
            return new $name();
        }


}

?>