<?php
echo vous avez choisis $_GET['lettre']


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jeu.css">
</head>
<body>
    <fieldset>
        <section>
            <h1>Choisissez une lettre</h1>
            <form action="jeu.php" method_="post">
                <input type="radio" name="un" id="A" value="A">
                <label for="A">A</label>
                <input type="radio" name="deux" id="B" value="B">
                <label for="B">B</label>
                <input type="radio" name="trois" id="C" value="C">
                <label for="C">C</label>
                <input type="radio" name="quatre" id="D" value="D">
                <label for="D">D</label>
                <input type="radio" name="cinq" id="E" value="E">
                <label for="E">E</label>
            </form>
        </section>
    </fieldset>
  
</body>
</html>