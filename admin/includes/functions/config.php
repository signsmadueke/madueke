<?php
session_start();

define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "root");
define("DBNAME", "madueke");

$link = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

require_once "db.php";
require_once "helpers.php";
require_once "actions.php";
