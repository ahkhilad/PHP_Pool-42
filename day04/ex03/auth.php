<?php
function auth($login, $passwd)
{
    if (!(file_exists("../private")))
        return (FALSE);
    $data = file_get_contents("../private/passwd");
    $data = unserialize($data);
    $passwd = hash("whirlpool", $passwd);
    foreach ($data as $user)
    {
        if ($user['login'] == $login && $user['passwd'] == $passwd)
            return (TRUE);
        else
            return (FALSE);
    }
}
?>