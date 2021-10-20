<?php
    unset($_COOKIE['user']);
    setcookie('user', '', time() - 3600, '/');
    echo "<h3><center>"."Successfully Logged Out. "."</center></h3>".'<center><h3>'."Redirecting to HomePage.....".'</center></h3>';
    echo "<script>setTimeout(\"location.href = '/webcoursera/index.php';\",1500);</script>";
?>