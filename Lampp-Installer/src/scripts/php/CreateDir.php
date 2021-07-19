<?php
    $path = "../../../../projects";
    $nameDir = $_POST["nameDir"];
    $extension = $_POST["extension"];
    
    if($extension === "dir"){
        mkdir("$path/$nameDir");
        chmod("$path/$nameDir", 0777);
    }else{
        fopen("$path/$nameDir.$extension", "w");
        chmod("$path/$nameDir.$extension", 0777);
    }
?>