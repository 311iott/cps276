<?php
require_once "upload_Proc.php";
if(isset($_POST["uploadFile"])){
    processFile();
}
else{
    $output = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="post" action="assignment_7_form.php" enctype="multipart/form-data">
            <h1>File Upload</h1>
            <p><a href="listFilesProc.php">Show File List</a></p>
            <p><?php echo $output; ?></p>
            <div class="form-group">
                    <div class="mb-3">
                        <label for="fileName" class="form-label">File Name</label>
                        <input type="text" class="form-control" id="fileName" name="fileName">
                    </div>
            </div>

            
                <div class="form-group mb-3">
      		        
      		        <input type="file" name="file" id="file">
      	        </div>
            
            <div class="form-group mb-3">
                <input class="btn btn-primary" type="submit" name="uploadFile" value="Upload File">
            
            </div>
        </form>
    </div>
</body>
</html>