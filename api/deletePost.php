<?php
require_once '../core/init.php';

$method = $_SERVER['REQUEST_METHOD'];


if ($method == "POST") {

    $id= Input::get("id");

    $user = new User();

    $user->deletePost(array("id", "=", $id));
    Redirect::to("../admin.php");
}
