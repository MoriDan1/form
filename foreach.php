<?php
    echo "<title>Login</title>";
    //insert values
    $db = array("" => "", "" => "", "" => "", "" => "" );

    $login = 0;

    $username = $_POST['username'];
    $password = $_POST['password'];

    foreach ($db as $key => $value) {
        if ($username == $key && $password == $value) {
            $login = 1;
            break;
        } else {
            $login = 0;
        }
    }

    if($username == /*insert value*/''){
        //insert values
        $valore = "";
    }elseif($username == /*insert value*/''){
      //insert values
        $valore = "";
    }elseif($username == /*insert value*/''){
      /*insert values*/
        $valore = "";
    }elseif($username == /*insert value*/''){
      /*insert value*/
        $valore = "";
    }

    if ($login == 1) {
        include './siLogin.html';
        $cook_usciti= $username;
        $cook_valore = $valore;
    } else {
        include './noLogin.html';
    }
?>
