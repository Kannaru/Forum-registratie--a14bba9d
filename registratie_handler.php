<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Forum registratie</h1>
</head>
<body>
    <?php
        foreach ($_POST as $key => $value) {
            echo "Jou $key is $value" . "<br>";
        }

    ?>
</body>
</html>