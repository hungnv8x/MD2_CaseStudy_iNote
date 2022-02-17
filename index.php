<?php

use App\Controller\NoteController;
use App\Controller\NoteTypeController;

require "vendor/autoload.php";

$noteTypeController = new NoteTypeController();
$noteController = new NoteController();
$page = $_REQUEST['page'] ?? "";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    switch ($page) {
        case "notetype-list":
            $noteTypeController->getAll();
            break;
        case "notetype-detail":
            $noteTypeController->getById($_REQUEST['id']);
            break;
        case "notetype-create":
            $noteTypeController->create($_POST);
            break;
        case "notetype-edit":
            $noteTypeController->update($_POST,$_REQUEST['id']);
            break;
        case "notetype-delete":
            $noteTypeController->delete($_REQUEST['id']);
            break;
        case "note-list":
            $noteController->getAll();
            break;
        case "note-detail":
            $noteController->getById($_REQUEST['id']);
            break;
        case "note-delete":
            $noteController->delete($_REQUEST['id']);
            break;
        case "note-create":
            $noteController->create($_POST);
            break;
        case "note-edit":
            $noteController->update($_POST, $_REQUEST['id']);
            break;
        default:
            include_once "App/View/Layout/nav.php";
    }
    ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>
</body>
</html>
