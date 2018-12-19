<html>
<head>
  <meta charset="utf-8">
  <title>Celmaititlu </title>
  <link href="stilul.css" rel="stylesheet">

</head>

<form class="form" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
<h1>Celmaicelformular</h1> <br>
<h3> Bagă aici un număr </h3><br>
<input type="number" name="numar">
<input type="submit" name="postsubmit" value="Ia vezi!!" class="button">
</form>


<?php

  if (isset($_POST['postsubmit'])) {
      $numar = $_POST['numar'];
    echo "Ai introdus numero $numar .. Ce bine, ce frumos!";

}
?>
