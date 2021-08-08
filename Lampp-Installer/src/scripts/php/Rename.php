<?php
/* 
  This function has the power to call
  popUp to edit the file/directory

  @param string $file = 
*/

function renameFilePopUp($file){
  echo "
  <button id='open-edit' class='file-button' value='$file' name='Rename'>
  <i class='fas fa-edit'></i>
  </button>";
}

/* 

  This function has the power to rename files/directories
  selected through ShowDirectorys() function.

  @param string $pathAndDirectory =
  @param string $extension =
  @param string $newName =
  @param string $directoryWithoutPath =
  @param string $path =
*/

function RenameD()
{
  $pathAndDirectory = $GLOBALS["arquivo"];
  $extension = $_POST["newExtension"];
  $newName = $_POST["newName"];
  if ($extension == "dir") {
    rename("$pathAndDirectory", "$pathAndDirectory/$newName");
  } else {
    rename("$pathAndDirectory", "$pathAndDirectory/$newName.$extension");
  }

  $directoryWithoutPath = strrpos(substr("$pathAndDirectory", 0, -1),'/');
  $path = substr("$pathAndDirectory", 0, $directoryWithoutPath);

  echo ("
  <script>
    window.location.href = '../../index.php?dir=$path';
  </script>
  ");
}