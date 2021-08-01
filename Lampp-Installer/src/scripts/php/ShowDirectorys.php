<?php
function ShowDirectorys(){
  include("Remove.php");
  $openDir = ($_GET['dir'] != "" ? $_GET['dir'] : "../../projects");
          $diretorio = dir($openDir);
          $strrdir = strrpos(substr($openDir, 0, -1),'/');
          $return = substr($openDir, 0, $strrdir);
          while ($arquivo = $diretorio->read()) {
            if($arquivo != "." && $arquivo != ".."){
              echo "<div class='file-container'>";
              if(is_dir("$openDir/$arquivo")){
                echo "<a class='file' href='index.php?dir=$openDir/$arquivo'>$arquivo</a><br>";
              }else{
                echo "<a class='file' href='$openDir/$arquivo'>$arquivo</a><br>";
              }
              echo "<br>
                    <div>
                    <form action='./scripts/php/Remove.php' method='post'>
                    <button value=$arquivo name='Remove'><i class='fas fa-trash'></i></button>
                    </form>
                    </div>
              </div>";
            }
          }
          if($openDir != "../../projects/" && $openDir != "../../projects"){
            echo "<a class='return' href='index.php?dir=$return'>Voltar</a>";
          }
            $diretorio->close();
  }
?>