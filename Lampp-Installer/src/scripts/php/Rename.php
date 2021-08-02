<?php
    if(isset($_POST["rename"])){
        RenameD();
    }
    function RenameD(){
        $path = "../../../../projects";
        $directory = $_POST["rename"];
        $extension = $_POST["extension"];
        $newName = $_POST["newName"];
        if($extension == "dir"){
            rename("$path/$directory", "$path/$newName");
        }else{
            rename("$path/$directory", "$path/$newName.$extension");
        }
    }
?>