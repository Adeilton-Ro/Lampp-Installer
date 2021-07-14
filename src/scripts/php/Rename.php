<?php
    $path = $_POST["path"];
    $directory = $_POST["directory"];
    $Extension = $_POST["extension"];
    $newName = $_POST["newName"];
    echo shell_exec("mv $path/$directory.$Extension $path/$newName.$Extension");
?>