<?php
    if(isset($_POST['Remove'])){
        Remove();
    }
    function Remove(){
        $directory = $_POST["Remove"];
        $path = "../../../../projects";
        if(is_dir("$path/$directory")){
            rmdir("$path/$directory");
        }else{
            unlink("$path/$directory");
        }
    }
?>