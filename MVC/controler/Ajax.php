<?php
    class Ajax extends Controller
    {
        public $modelcon;
        public function __construct()
        {
            $this->modelcon = $this->model("modelcon");
        }
        public function checkuse()
        {
            $un =  isset($_POST["un"]) ? $_POST["un"]:0;
           // echo $this->modelcon->checkus($un);
            if (isset($_POST['btnLogin']))
            {
                $this->view("main",[
                    "Page"=>"main"
                ]);
                //header('location: ../BCGK/MVC/view/html/main.php');
            }
        }
    }
?>