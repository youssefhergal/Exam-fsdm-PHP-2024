<?php


include("controllers/controller.php");


$action = $_GET["action"] ?? "index";

$action = $action . "Action";

if (is_callable($action)) {
    $action();
} else
    die ("Action non autorisée");
















