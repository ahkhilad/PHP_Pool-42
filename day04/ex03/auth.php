<?php
function auth($login, $passwd)
{
    if (!(file_exists("../private/passwd")))
        return (FALSE);
    $i = 0;
    $data = file_get_contents("../private/passwd");
    $data = unserialize($data);
    $pwd = hash("whirlpool", $passwd);
    foreach ($data as $user)
    {
        if ($user['login'] === $login && $user['passwd'] === $pwd)
            return (TRUE);
    }
    return (FALSE);
}
?>