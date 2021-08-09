<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700;900&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/home.css" />
  <link rel="stylesheet" href="styles/modal.css" />
  <title>Lamp on linux</title>
</head>

<body>

  <!-- Container section -->
  <div class="container">
    <aside>
      <div class="bar">
        <!-- Create new project from interface -->
        <button id="open">
          <i class="fas fa-plus fa-xs"></i>
        </button>

        <p class="subtitle">
          start <br />
          <b>your project</b>!
        </p>
      </div>

      <!-- List of projects already created -->
      <div class="list-container">
        <?php
        /* 
          Function that shows all user-created directories.
        */
        
        /* include "scripts/php/ShowDirectorys.php"; */
        ?>

        <!-- teste pois no meu php ainda ta bugado
        <div class='file-container'>
          <a class='file' href='index.php?dir=$openDir/$file'>jkspdk</a>
          <div class='configure-buttons'>
            <form action='./scripts/php/Remove.php' method='post'>
              <button value=$openDir/$file name='Remove' class='file-button'>
                <i class='fas fa-trash'></i>
              </button>
            </form>
            <button id='open-edit' class='file-button'>
              <i class='fas fa-edit'></i>
            </button>
          </div>
        </div> -->
      </div>
    </aside>

    <!-- Main area of image -->
    <main>
      <img class="icon-image" src="assets/iconImg.png" alt="Xamp on linux" />

      <img src="assets/backgroundText.png" alt="It's time to start your projects with PHP, MySQL and other technologies." />

      <div class="inform">made by brazilians 🇧🇷</div>
    </main>
  </div>

  <!-- 
    Section intended for modal's that are only
    executed when called by functions.
   -->

  <div id="modal-container" class="modal-container">
    <div class="modal">
      <h1>Setup initialization</h1>

      <p>Select settings for creating your project.</p>
      <?php
      echo "<form action='scripts/php/CreateDir.php' method='POST'>
        <input type='text' placeholder='Name Your Project' name='nameDir'>
        <select name='extension'>
          <option value='php'>PHP</option>
          <option value='html'>HTML</option>
          <option value='css'>CSS</option>
          <option value='js'>JavaScript</option>
          <option value='dir'> Directory </option>
          <option value='md'>README</option>
        </select>
        <button id='modal-button' type='submit' name='createDir' value=$openDir>Start a New Project</button>
      </form>";
      ?>
      <button id="close">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>

  <div id='modal-container-edit' class='modal-container-edit'>
    <div class='modal'>
      <h1>Rename file</h1>

      <p>Update file name or type.</p>

      <?php

      /* 
        dar um include e escrever na tela com echo verificando se o
        nome do arquivo ao menos foi retornado

        atribuir a alguma variavel

        e passar como parametro a variavel criada dentro dafunção popup()

        se não passar o parametro o formulario n vai mostrar e muito menos
        poder editar.
      */

      function popUp($file)
      {
        echo "<form action='scripts/php/Rename.php' method='POST'>
          <input type='text' placeholder='Rename Your Project' name='newName' value='$file'>
          <select name='newExtension'>
            <option value='php'>PHP</option>
            <option value='html'>HTML</option>
            <option value='css'>CSS</option>
            <option value='js'>JavaScript</option>
            <option value='dir'> Directory </option>
            <option value='md'>README</option>
          </select>
          <button id='modal-button' type='submit' name='Rename'>Rename Project</button>
        </form>";
      }
      ?>

      <button id='close-edit' class=''>
        <i class='fas fa-times'></i>
      </button>
    </div>
  </div>

  <!-- Scripts and functions -->
  <script src="https://kit.fontawesome.com/2be8964d04.js" crossorigin="anonymous"></script>
  <script src="scripts/js/script.js"></script>
</body>

</html>