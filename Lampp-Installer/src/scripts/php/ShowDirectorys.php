<?php

$openDir = ($_GET['dir'] != "" ? $_GET['dir'] : "../../projects");
$diretorio = dir($openDir);
$strrdir = strrpos(substr($openDir, 0, -1), '/');
$return = substr($openDir, 0, $strrdir);

include("Rename.php");

while ($arquivo = $diretorio->read()) {
  if ($arquivo != "." && $arquivo != "..") {
    echo "<div class='file-container'>";
    if (is_dir("$openDir/$arquivo")) {
      echo "<a class='file' href='index.php?dir=$openDir/$arquivo'>$arquivo</a><br>";
    } else {
      echo "<a class='file' href='$openDir/$arquivo'>$arquivo</a><br>";
    }
    echo "<br>
            <div class='configure-buttons'>
              <form action='./scripts/php/Remove.php' method='post'>
                <button value=$openDir/$arquivo name='Remove' class='file-button'>
                  <i class='fas fa-trash'></i>
                </button>
              </form>". 
              renameFilePopUp("$openDir/$arquivo")
              ."
              </div>
              </div>";
              if(isset($_POST["Rename"])){
                popUp($arquivo);
              };
  }
}

if ($openDir != "../../projects/" && $openDir != "../../projects") {
  echo "<a class='return' href='index.php?dir=$return'>Voltar</a>";
}

$diretorio->close();