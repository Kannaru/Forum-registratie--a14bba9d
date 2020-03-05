<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <h1>Forum registratie</h1>
</head>
<body>
    <form action="/registratie_handler.php" method="post">
  
      <input name="Username" type="text" required/>
        <label for="Username"><strong>Username</strong></label><br><br>
        <input name="Email" type="email" required/>
        <label for="Email"><strong>Email adres</strong></label><br><br>
        <input name="leeftijd" type="number" required/>
        <label for="leeftijd"><strong>Leeftijd</strong></label><br><br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>