<?php
session_start();

define("HOST", "localhost:3306");
define("USER", "charisgo_madueke");
define("PASSWORD", "Signtop@1");
define("DBNAME", "charisgo_madueke");

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once "db.php";
require_once "helpers.php";
require_once "actions.php";
