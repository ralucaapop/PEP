<?php
if(!isset($_SESSION['idProfesor']))
{
    header("location: index.php");
    exit();
}