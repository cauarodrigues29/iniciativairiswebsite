<?php
    session_start();
    if (isset($_SESSION))
    {
        session_destroy();
    }
    echo 'Logout efetuado!';
    header("Refresh: 1; url=form_login.php");
?>
