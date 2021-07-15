<?php
    $path = "../../../../projects";
    $directory = $_POST["directory"];
    $Extension = $_POST["extension"];
    unlink("$path/$directory.$Extension");
?>