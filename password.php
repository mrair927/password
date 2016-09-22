
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <title>Password Generator</title>
    <?php require 'logic.php'; ?>
<link rel="stylesheet" href="password.css" type="text/css" />
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">



</head>
  <body>

    <h1>Password Generator</h1>
    <form method='POST' action='password.php'>
        <label>
            How long (1-9) would you like your password to be?
        </label>

        <input type='text' name='numberofwords'> <?php echo $error ?> <br>
        <input type="checkbox" name="givenumber">Include a number<br>
        <input type="checkbox" name="givesym">Include a symbol<br>


        <input type='submit' name='submit' value='Generate!'>


    </form>

    <section>

                <p> Your Password is:<?php echo $password ?></p>

    </section>




</body>
</html>
