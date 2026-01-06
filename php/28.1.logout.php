<?php
session_start();
session_destroy();

setcookie('username',null,time()-1);
setcookie('name',null,time()-1);

header('location:28.session&cookie.php');
?>
