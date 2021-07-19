<?php 
  function ShowDirectorys(){
    $diretorio = dir(".");
    $i = 0;
    $files = [];
    while($file = $diretorio -> read()){
      $files[$i] = "<a class =".'Link'." href='./".$file."'>".$file."</a><br />";
    $i++;
  }
  $diretorio -> close();
  return $files; 
  }
?>