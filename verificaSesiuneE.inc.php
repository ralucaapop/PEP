<?php
if(!isset($_SESSION['idElev']))
{
    header("location: index.php");
    exit();
}