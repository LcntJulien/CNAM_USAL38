<?php

session_start();
    if(!isset($_SESSION['NIVEAU'])){
        header("location:index.php");
        exit;
    }
?>