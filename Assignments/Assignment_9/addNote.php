<?php
require_once "addOrDisplayNote.php";

if(isset($_POST["addNote"])){
    $addOrDisplayNote = new addOrDisplayNote();
    $output = $addOrDisplayNote->makeADateAndNote();
    
}else{
    $output = "";
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Note</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Add Note</h1>
            <p><a href="displayNote.php" style="text-decoration: none">Display Notes</a></p>
            <?php echo $output;?>
                <form action="addNote.php" method="post" enctype="multipart/form-data">

                    <div class="row mb-3">
                        <label class="form-label" for="dateAndTime">Date And Time
                            <input type="datetime-local" class="form-control" id="dateAndTime" name="dateAndTime">
                        </label>
                    </div>  
                    
                    <div class="row mb-3">
                        <label for="noteToSelf">Note
                        <textarea id="noteToSelf" name="noteToSelf" class="form-control" cols="12" rows="12"></textarea>
                        </label>
                    </div>

                    <div class="row mb-3">
                        <div class="cols-1">
                            <input type="submit" class="btn btn-primary" id="addNote" name="addNote" value="Add Note">
                        </div>
                    </div>
                </form>

    </div>
    
</body>
</html>