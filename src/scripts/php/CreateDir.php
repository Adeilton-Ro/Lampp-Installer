<?php
    $path = "../../../../projects";
    $nameDir = $_POST["nameDir"];
    $extension = $_POST["extension"];
    
    fopen("$path/$nameDir.$extension", "w");
?>