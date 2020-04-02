<?php
require_once "includes/functions/config.php";

session_destroy();
redirect_to("login");
