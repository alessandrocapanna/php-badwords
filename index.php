<?php
  $paragrafo = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
  $lunghezza = strlen($paragrafo);
  $parolaccia = $_GET["badword"];
  $new_paragrafo = str_replace($parolaccia, '***', $paragrafo);
?>

<p>parolaccia: <?php echo $parolaccia?></p>
<p><?php echo $new_paragrafo?></p>
<p>Lunghezza: <?php echo $lunghezza ?></p>
