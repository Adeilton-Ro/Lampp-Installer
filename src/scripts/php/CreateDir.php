<?php
    $path = $_POST["path"];
    $nameDir = $_POST["NameDir"];
    $extension = $_POST["Extension"];

    $answer = $_POST["answer"];
    if($answer == "file"){
        fopen("$path/$nameDir.$extension", "w");
    }else{
        mkdir ("$path/$nameDir");
    }
?>
