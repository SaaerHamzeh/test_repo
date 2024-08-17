<?php
function tbl($ta, $tb, $n)
{
    echo '<table border="1">';
    echo ("<tr><th>$ta</th><th>$tb</th></tr>");
    for ($i = 0; $i < $n; $i++) {
        if ($i % 2 == 0) {
            $c = "yellow";
        } else {
            $c = "blue";
        }
        echo ("<tr style='background-color:$c; font-size:30px;'><th>&nbsp</th><th>&nbsp</th></tr>");
    }
    echo '</table>';
}
tbl('name', 'age', 5);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>