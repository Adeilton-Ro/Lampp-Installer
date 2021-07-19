<?php
    $path = "../../../../projects";
    $directory = $_GET["directory"];
    unlink("$path/$directory");
?>