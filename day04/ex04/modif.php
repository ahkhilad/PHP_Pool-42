<?php
if ($_POST['submit'] !== "OK" || $_POST['oldpw'] === "" || $_POST['newpw'] === "" || $_POST['login'] === "")
    exit ("ERROR\n");
else
{
    $data = file_get_contents("../private/passwd");
    $data = unserialize($data);
    $i = 0;
    foreach($data as $user)
    {
        if ($user['login'] == $_POST['login'])
        {
            if ($user['passwd'] == hash("whirlpool", $_POST['oldpw']))
            {
                $newpasswd = hash("whirlpool", $_POST['newpw']);
                $tmp = array('login' => $_POST['login'], 'passwd' => $newpasswd);
                $data[$i] = $tmp;
                file_put_contents("../private/passwd", serialize($data));
                header('Location: index.html');
                echo "OK\n";
            }
        }
        $i++;
    }
    exit ("ERROR\n");
}
?>