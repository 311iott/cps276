<?php
require_once "Crud.php";
$crud = new Crud();
$output = $crud->getFileNames();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO Assignment List Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>List of Uploaded Files</h1>
    <p><a href='assignment_7_form.php' style='text-decoration: none;'>Add File</a></p>
    <?php echo $output;?>
    </div>
</body>
</html>