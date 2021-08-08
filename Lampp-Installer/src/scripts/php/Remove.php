<?php

/** 
 * This function has the power to 
 * delete user files/directories
 *
 * @param string $pathDirectory =
 * @param string $directoryWithoutPath = 
 * @param string $path =  
 * */

function Remove()
{
  $pathDirectory = $_POST["Remove"];
  if (is_dir("../../$pathDirectory")) {
    rmdir("../../$pathDirectory");
  } else {
    unlink("../../$pathDirectory");
  }
  $directoryWithoutPath = strrpos(substr("$pathDirectory", 0, -1), '/');
  $path = substr("$pathDirectory", 0, $directoryWithoutPath);
  echo ("
  <script>
    window.location.href = '../../index.php?dir=$path';
  </script>
  ");
}

if (isset($_POST['Remove'])) {
  Remove();
}
