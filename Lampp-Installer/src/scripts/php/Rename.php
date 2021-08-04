<?php
if (isset($_POST["Rename"])) {
  renameFilePopUp();
  RenameD();
}
function RenameD()
{
  $path = "../../../../projects";
  $directory = $_POST["Rename"];
  $extension = $_POST["extension"];
  $newName = $_POST["newName"];
  if ($extension == "dir") {
    rename("$path/$directory", "$path/$newName");
  } else {
    rename("$path/$directory", "$path/$newName.$extension");
  }
}

function renameFilePopUp()
{
  echo "
      <div id='modal-container' class='modal-container'>
          <div class='modal'>
            <h1>Rename file</h1>

            <p>Update file name or type.</p>
            <button id='close'>
              <i class='fas fa-times'></i>
            </button>
          </div>
      </div>
      ";
}
