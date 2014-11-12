<?php
/**
* base controller
*/
class baseCont
{

        public static function loadModel($model_name,$s,$u,$p,$d)
        {
            require_once 'app/model/' . strtolower($model_name) . '.php';
            return new $model_name($s,$u,$p,$d);
        }
        public static function headers()
        {
            ob_start();
            header('Content-Type: text/html; charset=utf-8');
        }
        public static function flush()
        {
            ob_flush();
            ob_end_flush();
        }
        public static function loadController($name)
        {
            require_once 'app/controller/' . strtolower($name) . '.php';
            return new $name();
        }

}

?>