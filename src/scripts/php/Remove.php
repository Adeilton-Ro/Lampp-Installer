<?php
    $path = $_POST["path"];
    $directory = $_POST["directory"];
    $Extension = $_POST["extension"];
    echo shell_exec("rm -rf $path/$directory.$Extension");
?>