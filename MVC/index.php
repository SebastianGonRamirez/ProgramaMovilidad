
<?php

//Incluyo los archivos necesarios
require_once "./config/database.php";
require_once "./model/model.php";
require_once "./controller/controller.php";

$control = new WebController();

$control -> index();