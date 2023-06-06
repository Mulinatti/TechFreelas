<?php
    session_start();
    $_SESSION = array();    // limpando a sessão
    session_destroy();      // destruindo a sessão
    header("Location: ../main-page/index.php");
?>