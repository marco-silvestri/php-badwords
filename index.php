<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badword</title>
</head>
<body>
    <h1>Change the history</h1>
    <?php
    $paragraph = "Anakin, join the dark side of the force!";
    $badword = $_GET[badword];
    ?>
    <p>Before: <strong><?php echo $paragraph; ?></strong></p>
    <p>The paragraph has a length of <?php echo strlen($paragraph); ?> characters </p>
    <p>Anakin has to read: <strong><?php echo str_replace($badword,'***',$paragraph); ?></strong></p>
</body>
</html>