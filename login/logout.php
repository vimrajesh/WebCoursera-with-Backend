<?php
    unset($_COOKIE['user']); 

    echo "<h3><center>"."Successfully Logged Out. "."</center></h3>".'<center><h3>'."Redirecting to HomePage.....".'</center></h3>';
    echo "<script>setTimeout(\"location.href = '../index.php';\",1500);</script>";
?>