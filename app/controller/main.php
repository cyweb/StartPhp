<?php
    /**
    * main controller
    */
    class site extends baseCont
    {
        private $model;
        private $admin;
        private $page;
        public $inc;

        public function site($server,$user,$pass,$db,$t_folder)
        {
            self::headers();
            $this->model=self::loadModel("model",$server,$user,$pass,$db);
            $this->admin=self::loadController("admin");
            $this->page=self::loadController("page");
            $this->inc=$this->page->check($this->admin->check_session());
        }
        public function __destruct()
        {
            $this->model->close();
            self::flush();
        }

    }


?>