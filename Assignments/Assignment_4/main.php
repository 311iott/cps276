<?php
require_once 'change.php';
if (count($_POST) > 0){
$nameChange = new NameChange();
$output = $nameChange -> displayProp();
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Submit Names</title>
    
</head>
<body>
    <div class="container">
        <h1>Add Names</h1>
            <form action="main.php" method="post">
                <div class="form-group">
                    
                        <input class="btn btn-primary" type="submit" name="personName" id="personName" value="Add Name">
                   
                        <input class="btn btn-primary" type="submit" name="personName" id="clearNames" value="Clear Names">
                    
                </div>
                
                <div class="form-group">
                    <div class="mb-3">
                        <label for="names" class="form-label">Enter Name</label>
                        <input type="text" class="form-control" id="names" name="names">
                    </div>
                </div>

                <div class="form-group">
                    <div class="mb-3">
                        <label for="namelist" class="form-label">List of Names</label>
                        <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output?></textarea>
                    </div>
                </div>
            </form>     
    </div>
</body>
</html>