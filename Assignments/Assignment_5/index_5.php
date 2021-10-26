<?php
require_once'displayFile.php';
if($_POST){
    $display = new Directories();
    $output = $display-> makeAnchor();
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
    <title>Files and Directories Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Files and Directories Assignment</h1>
        <p>Enter a folder name and contents of a file. Folder names should contain only alpha numeric characters.</p>
        <?php echo $output; ?>
            <form action="index_5.php" method="post">

                <div class="form-group">
                    <div class="mb-3">
                        <label for="dirNames" class="form-label">Folder Name</label>
                        <input type="text" class="form-control" id="dirNames" name="dirNames">
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label for="fileContent" class="form-label">File Content</label>
                        <textarea style="height: 400px;" class="form-control" id="fileContent" name="fileContent"></textarea>
                    </div>
                </div>

                <div class="form-group">

                    <input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit">

                </div>

            </form>
    </div>  
</body>
</html>