<?php

/**
 * This function has the power to show all files/directories
 * created by the user with delete and edit functions.
 *
 * @param string $openDir = 
 * @param string $directory = 
 * @param function $strrDir = 
 * @param function $return = 
 */

$openDir = ($_GET['dir'] != "" ? $_GET['dir'] : "../../projects");
$directory = dir($openDir);
$strrDir = strrpos(substr($openDir, 0, -1), '/');
$return = substr($openDir, 0, $strrDir);

include("Rename.php");

while ($file = $directory->read()) {
  if ($file != "." && $file != "..") {
    echo "<div class='file-container'>";
    if (is_dir("$openDir/$file")) {
      echo "<a class='file' href='index.php?dir=$openDir/$file'>$file</a><br>";
    } else {
      echo "<a class='file' href='$openDir/$file'>$file</a><br>";
    }

    echo "<br>
          <div class='configure-buttons'>
            <form action='./scripts/php/Remove.php' method='post'>
              <button value=$openDir/$file name='Remove' class='file-button'>
                <i class='fas fa-trash'></i>
              </button>
            </form>" . renameFilePopUp("$openDir/$file") . "
          </div>
        </div>";
    if (isset($_POST["Rename"])) {
      popUp($file);
    };
  }
}

if ($openDir != "../../projects/" && $openDir != "../../projects") {
  echo "<a class='return' href='index.php?dir=$return'>Voltar</a>";
}

$directory->close();
