<?php
include ('../html/connect.php');
session_start();
session_unset();
session_destroy();
header("location:../html/signin.php");
die();
