<?php
if ($_POST['submit'] !== "OK" || $_POST['passwd'] === "" || $_POST['login'] === "")
    exit ("ERROR\n");
if (!(file_exists('../private')))
    mkdir("../private");
if ($_POST['submit'] === "OK")
{
    $login = $_POST['login'];
    $passwd = $_POST['passwd'];
    if (file_exists("../private/passwd"))
    {
        $data = file_get_contents("../private/passwd");
        $data = unserialize($data);
        foreach($data as $user)
        {
            if ($user['login'] === $login)
                exit("ERROR\n");
        }
        $passwd = hash("Whirlpool", $passwd);
        $tmp_user = array("login" => $login, "passwd" => $passwd);
        $data[] = $tmp_user;
        file_put_contents("../private/passwd", serialize($data));
        exit ($_POST['submit']."\n");
    }
    else
    {
        $passwd = hash("Whirlpool", $passwd);
        $user = array("login" => $login, "passwd" => $passwd);
        $data = array($user);
        file_put_contents("../private/passwd", serialize($data));
        exit ($_POST['submit']."\n");
    }
}
?>