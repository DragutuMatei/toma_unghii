<?php
require_once '../core/init.php';

    if(isset($_POST['submit'])){
        $user=new User();

        try{
            $user->addPost(array(
                "username"=>Input::get("username"),
                "email"=>Input::get("email"),
                "phone"=>Input::get("phone"),
                "message"=>Input::get("message")
            ));
            Redirect::to("../index.php?msg=ok");
        }catch(Exception $e){
            die($e->getMessage());
        }
    }
?>