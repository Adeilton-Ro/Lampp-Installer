<?php 
  $path = "projects/";
  $diretorio = dir($path);
  
  while($arquivo = $diretorio -> read()){
  echo "<a class =".'Link'." href='".$path.$arquivo."'>".$arquivo."</a><br />";
  }
  $diretorio -> close();
?>