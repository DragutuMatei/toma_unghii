<?php
session_start();

// $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server = $cleardb_url["host"];
// $cleardb_username = $cleardb_url["user"];
// $cleardb_password = $cleardb_url["pass"];
// $cleardb_db = substr($cleardb_url["path"], 1);
// $active_group = 'default';
// $query_builder = TRUE;


// mysql://b4859973856a0c:321472c6@eu-cdbr-west-02.cleardb.net/heroku_e9e93110ed9cf9a?reconnect=true
$GLOBALS['config'] = array(
    'mysql' => array(
        'host' => "eu-cdbr-west-02.cleardb.net",
        "username" => "b4859973856a0c",
        'password' => "321472c6",
        'db' => 'heroku_e9e93110ed9cf9a'
    ),
    'remember' => array(
        'cookie_name' => 'hash',
        'cookie_expire' => 604800
    ),
    'session' => array(
        'session_name' => 'user',
        'token_name' => 'token'
    ),
);


spl_autoload_register(function ($class) {
    if (file_exists('./classes/' . $class . '.php')) {
        require_once './classes/' . $class . ".php";
    } else {
        require_once '../classes/' . $class . ".php";
    }
});

function escape($string)
{
    return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

// try {
//     require_once '../functions/sanitize.php';
// } catch (Error $e) {
//     require_once './functions/sanitize.php';
// }