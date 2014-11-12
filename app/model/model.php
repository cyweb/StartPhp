<?php
/**
* Main Model
*/

require_once 'baseModel.php';

class model extends baseModel
{
    private $conn;
    private $conn_err=1;
    public function model($server,$user,$pass,$db)
    {
        self::connect($server,$user,$pass,$db);
    }

    private function connect($s,$u,$p,$d)
    {
        try
        {
            mysqli_report(MYSQLI_REPORT_STRICT);
            $this->conn = new mysqli($s, $u, $p, $d);
            $this->conn->query("SET NAMES 'utf8'");
            $this->conn_err = $this->conn->connect_errno;
        }
        catch (Exception $e)
        {
            exit('No db connection !');
        }
    }


    public function close()
    {
        if ($this->conn_err==0){ $this->conn->close(); }
    }
}

?>