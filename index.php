<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $dataFromInput = $_POST['age_data'];
    $convertData = date("d-F-Y", strtotime($dataFromInput));

    $date1 = new DateTime("now");
    $date2 = new DateTime("$convertData");

    $interval = date_diff($date2, $date1);

    $result = $interval->format('%y years');
}
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Document</title>
</head>
<body>
<div class="container">
    <p>Enter your Birthday</p>
    <form method="post">
        <input type="date" name="age_data" required>
        <input type="submit">
    </form>
    <hr>
    <p><?php echo "You are {$result} old";?></p>
</div>

</body>
</html>
