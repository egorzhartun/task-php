<?php

require('./class/Task.php');

$task = new Task();
$finalarray = $task->sortArray('date_from');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($finalarray); $i++) {
            echo $finalarray[$i]["date_from"] . " / " . $finalarray[$i]["date_to"] . ": " . nl2br($finalarray[$i]["address"] . "\n");
        }
    ?>
</body>
</html>