<?php
require_once "assignment_9_Crud.php";

class addOrDisplayNote{

    public function makeADateAndNote(){
        if ($_POST['dateAndTime'] === ""){
            return "Please enter a date.";
        }elseif ($_POST['noteToSelf'] === ""){
            return "Please type in a note. Even just a single character.";
        }else{
            //pdo/crud methods with database, etc.
           
            $crud = new Crud();
            $output = $crud->addNote();
            return $output;
        }

    }  
    public function displayNotes(){
        $crud = new Crud();
        $output = $crud->getNotes();
        return $output;
    }

       
    
}
?>
