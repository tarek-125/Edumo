<?php
session_start();
include_once ('../privatePhp/conn.php');
session_unset();
session_destroy();
header('location:../folder HomePage/welcomHome.html');
?>