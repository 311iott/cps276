<?php
$make_table = "<table border='1'>";

for ($i = 1; $i < 16; $i++){
    $make_table .= "<tr>";
    for ($j = 1; $j < 6; $j++){
            $make_table .= "<td>Row $i Cell $j";
        }
    $make_table .= "</tr>";
}

$make_table .= "</table>";
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
<?php echo $make_table;?>

</body>
</html>