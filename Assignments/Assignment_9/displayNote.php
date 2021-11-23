<?php
date_default_timezone_set('America/Detroit');
require_once "addOrDisplayNote.php";
if(isset($_POST['getNotes'])){
    $addOrDisplayNote = new addOrDisplayNote();
    $output = $addOrDisplayNote->displayNotes();
}else{
    $output = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Notes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Display Notes</h1>
            <p><a href="addNote.php" style="text-decoration: none">Add Note</a></p>

            <form action="displayNote.php" method="post" enctype="multipart/form-data">
                <div class="row mb-3"f>
                    <label for="begDate">Beginning Date
                        <input type="date" class="form-control" id="begDate" name="begDate">
                    </label>
                </div>

                <div class="row mb-3">
                    <label for="endDate">End Date
                        <input type="date" class="form-control" id="endDate" name="endDate">
                    </label>
                </div>

                <div class="row mb-3">
                    <div class="cols-1">
                        <input type="submit" class="btn btn-primary" id="getNotes" value="Get Notes" name="getNotes">
                    </div>
                </div>
            </form> 
            <?php echo $output; ?> 
    </div>    
</body>
</html>