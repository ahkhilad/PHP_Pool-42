<?php
if ($_POST['submit'] != "OK" || $_POST['passwd'] != "" || $_POST['login'] != "")
    exit ("ERROR\n");
if (!(file_exists('../private')))
    mkdir("../private");
//if (/*check if the username is already exsist or not*/)
    //exit ("ERROR\n");
//else
    //{
        // $passwd = hash("Whirlpool", $_GET['passwd']);
        // $data_pushed = array("login" => $_GET['login'], "passwd" => $passwd);
        // file_put_contents("../private/passwd", serialize($userdata));
        // $data_pulled = file_get_contents("../private/passwd");
        // unserialize($data_pulled);
    //}

?>