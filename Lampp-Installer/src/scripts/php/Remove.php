<?php
if (isset($_POST['Remove'])) {
    Remove();
}
function Remove()
{
    $pathAndDirectory = $_POST["Remove"];
    if (is_dir("../../$pathAndDirectory")) {
        rmdir("../../$pathAndDirectory");
    } else {
        unlink("../../$pathAndDirectory");
    }
    $directoryWithoutPath = strrpos(substr("$pathAndDirectory", 0, -1),'/');
    $path = substr("$pathAndDirectory", 0, $directoryWithoutPath);
    echo ("
    <script>
    window.location.href = '../../index.php?dir=$path';
    </script>
    ");
}
?>