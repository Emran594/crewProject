<?php
session_start();

if($_SESSION['']==false){
    header("Location:login.php");
}