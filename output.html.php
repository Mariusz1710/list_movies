<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>List of movies</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>

<table>
        <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Director</th>
            <th>Year</th>
        </tr>

<?php

    $i = 1;

    foreach($result as $row)
    {
        echo '<tr><td>'.$i.'</td><td>'.$row['title'].'</td><td>'.$row['firstName'].' '.$row['lastName'].'</td><td>'.$row['year'].'</td></tr>';
        $i++;
    }

?>

</table>

</body>
</html>