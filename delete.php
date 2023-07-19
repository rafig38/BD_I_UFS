<?php
// exclui arquivo infos.txt
if (file_exists("infos.txt")) {
    unlink('infos.txt');
}    

header('Location: index.html');
?>
