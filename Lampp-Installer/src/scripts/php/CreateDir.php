<?php
/**
 * This function has the power to create new 
 * files/directories in an easier way for users.
 * 
 * @param string $path = 
 * @param string $nameDir = 
 * @param string $extension =
 */

function CreateDir()
{
  $path = $_POST['createDir'];
  $nameDir = $_POST["nameDir"];
  $extension = $_POST["extension"];

  if ($extension === "dir") {
    mkdir("../../$path/$nameDir");
    chmod("../../$path/$nameDir", 0777);
  } else {
    fopen("../../$path/$nameDir.$extension", "w");
    chmod("../../$path/$nameDir.$extension", 0777);
  }

  echo ("
  <script>
    window.location.href = '../../index.php?dir=$path';
  </script>
  ");
}

if (isset($_POST['createDir'])) {
  CreateDir();
}
?>