<?php
  define('USER', 'Card');
  define('PASSWORD', 'Christmas');

  if (!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW'])) {
      header('WWW-Authenticate: Basic realm="Basic Auth"');
      header('HTTP/1.0 401 Unauthorized');
      echo 'You must login to proceed.';
  } elseif (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == USER && isset($_SERVER['PHP_AUTH_PW']) && $_SERVER['PHP_AUTH_PW'] == PASSWORD) {
      header( 'Location: index.php' ) ;
      echo '<p><a href="login.php">Back to the log in screen</a></p>';
      $logged_in = True;
  } else {
      header('HTTP/1.0 401 Unauthorized');
      echo "<p>You shall not pass!</p>";
  }
?>
