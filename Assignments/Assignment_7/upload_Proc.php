<?php
require_once "Crud.php";
function processFile(){

    global $output;

    if ($_FILES["file"]["error"] == 4){
        $output = "No file was uploaded. Make sure you choose a file to upload";
    }
    elseif ($_FILES["file"]["size"] > 100000){
        $output = "File is too large.";
    }
    elseif ($_FILES["file"]["type"] != "application/pdf"){
        $output = "Wrong type of file. PDF only.";
    }
    else {
        $crud = new Crud();
        $output = $crud->addFile();
    }
}

?>