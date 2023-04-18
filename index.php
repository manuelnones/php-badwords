<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>php badwords</title>
</head>
<body>

  <form action="censored.php" method="GET">
      <textarea name="paragraph" id="paragraph" cols="30" rows="10"></textarea>
      <br>
      <input name="badword" type="text" placeholder="Parola da censurare">
      <button type="submit">Invia</button>
  </form>

</body>
</html>