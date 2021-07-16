<?php
    $path = "../../../../projects";
    $nameDir = $_POST["nameDir"];
    $extension = $_POST["extension"];
    $newName = $_POST["newName"];
    rename("$path/$nameDir.$extension", "$path/$newName.$extension");
?>