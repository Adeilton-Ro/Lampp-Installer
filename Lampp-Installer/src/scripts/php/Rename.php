<?php
function renameFilePopUp($arquivo){
  echo "
  <form method='post'>
  <button id='open-edit' class='file-button' value='$arquivo' name='Rename'>
  <i class='fas fa-edit'></i>
  </button>
  </form>";
}

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