<?php
session_start();

if (isset($_POST["pseudo"])){
    var_dump($_POST["pseudo"]);
    die;
}
