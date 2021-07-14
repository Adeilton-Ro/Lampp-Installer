<?php
    $path = $_POST["path"];
    $directory = $_POST["directory"];
    $Extension = $_POST["extension"];
    unlink("$path/$directory.$Extension");
?>