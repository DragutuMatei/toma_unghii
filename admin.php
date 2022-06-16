<?php
require_once 'core/init.php';

if (!isset($_SESSION["admin"])) {
    Redirect::to("redirect.php");
}

$user = new User();
$posts = $user->getPosts();



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: auto;
            text-align: center;
            font-family: arial;
        padding: 20px;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>

<body>

    <?php
    foreach ($posts as $post) {
        echo "
        <div class='card'>
            <h1>$post->username</h1>
            <p class='price'>            
                <a href='mailto:$post->email'>$post->email</a>
            </p>

            <p class='price'>            
            $post->phone
        </p>

            <p>$post->message</p>
            <p>  <form action='./api/deletePost.php' method='POST' >
            <input type='hidden' name='id' value=" . $post->id . " />
            <button type='submit' name='submit' >delete</button>
            </form></p>
        </div>

";
    }

    ?>
</body>

<!-- <div class='post'>
            <h2>$post->username</h2>
            <a href='mailto:$post->email'>$post->email</a>
            <h2>$post->phone</h2>
            <p>$post->message</p>

            <form action='./api/deletePost.php' method='POST' >
            <input type='hidden' name='id' value=".$post->id." />
            <button type='submit' name='submit' >delete</button>
            </form>
            </div> -->

</html>