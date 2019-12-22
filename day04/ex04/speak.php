<?php
session_start();
if ($_SESSION['loggued_on_user'] != "")
{
    date_default_timezone_set("Africa/Casablanca");
    if (!(file_exists("../private/chat")))
        file_put_contents("../private/chat", "");
    $arr = array("login" => $_SESSION['loggued_on_user'], "time" => date("[h:i]"), "msg" => $_POST['msg']);
    $data = file_get_contents("../private/chat");
    $data = unserialize($data);
}
?>
<form action="speak.php" method="POST">
    <input type="text" name="msg">
    <input type="submit" name="submit" value="OK">
</form>