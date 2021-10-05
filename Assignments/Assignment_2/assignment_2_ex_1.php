<?php 

$output = "<ul>";


for ($i=1; $i<5; $i++){
   $output .= "<li>$i<ul>";

   for($j = 1; $j < 6; $j++){
      $output .= "<li>$j</li>";
   }

   $output .= "</ul></li>";


}

$output .= "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php echo $output;?>
   <!-- put a php block to echo the output variable -->
</body>
</html>