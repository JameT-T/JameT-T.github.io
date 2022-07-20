<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  if (isset($_POST['username']) &&
  !empty($_POST['username'])
  ) {
    $cookie_value=$_POST['username'];
    setcookie('username', $cookie_value, time() + 600, '/wordpress/');

    echo "Cookie set";
  } else {
    echo "Cookie not set";
  }
?>
