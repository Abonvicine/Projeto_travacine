<?php

class Mensagem{
    public static function show_msg(){
        session_start();
        if(isset($_SESSION["msg"])){
    
            $msg = $_SESSION["msg"];
            unset($_SESSION["msg"]);

            return "<script>M.toast({html: '$msg'});</script>";

        }
    }
}

?>