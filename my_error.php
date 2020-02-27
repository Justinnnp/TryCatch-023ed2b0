<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error's</title>
</head>
<body>
    <?php

function countDown(){
$rts = rand(0, 20);
    try {
        if ($rts >= 0 && $rts <= 10) {
            throw new Exception('Er is iets fout gegaan !');
        } else {
            echo $rts;
        }
    } catch (Exception $e) {
        echo ' Error: ',  $e->getMessage();
    }
}
countDown();
?>
</body>
</html>