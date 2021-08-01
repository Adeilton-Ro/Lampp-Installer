<?php
    if(isset($_POST["Rename"])){
        RenameD();
    }

    function RenameD(){
        $path = "../../../../projects";
        $directory = $_POST["directory"];
        $extension = $_POST["extension"];
        $newName = $_POST["newName"];
        if($extension == "dir"){
            rename("$path/$directory", "$path/$newName");
        }else{
            rename("$path/$directory", "$path/$newName.$extension");
        }
    }
?>