<?php
session_start();
session_destroy();
header("location:../Module Login/Pages/Page_Login.php");
?>