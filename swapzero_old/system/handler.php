<?

// Скрипт проверки
include ($_SERVER['DOCUMENT_ROOT']."/settings/dbconfig.php");


# Соединямся с БД

mysql_connect($db_server, $db_user, $db_pass);

mysql_select_db($db_name);


if (isset($_COOKIE['id']) and isset($_COOKIE['hash']))

{   

    $query = mysql_query("SELECT *,INET_NTOA(ip) FROM users WHERE id = '".intval($_COOKIE['id'])."' LIMIT 1");

    $userdata = mysql_fetch_assoc($query);


    if(($userdata['hash'] !== $_COOKIE['hash']) or ($userdata['id'] !== $_COOKIE['id'])<br> or (($userdata['ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['ip'] !== "0")))

    {

        setcookie("id", "", time() - 3600*24*30*12, "/");

        setcookie("hash", "", time() - 3600*24*30*12, "/");

        print "Хм, что-то не получилось";

    }

    else

    {

        print "Привет, ".$userdata['login'].". Всё работает!";

    }

}

else

{

    print "Включите куки";

}

?>