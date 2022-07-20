<?php
/* Tell search engines that the site is temporarily unavilable */
$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?>

<!-- HTML Code goes in between these comment lines (below here)-->

<!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Page Temporarily Down</title>

    <style>
      body {
        margin: 0px;
      }

      .container {
        display: flex;
        justify-content: center;
        width: 100vw;
        height: 100vh;
      }

      .box {
        align-self: center;
        background-color: lightgreen;
        border-radius: 20px;
        padding: 24px;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="box">
        <h1 class="heading">We are currently down for maintenance...</h1>

        <h2>
          <?php
            if (isset($_COOKIE["username"])) {
              echo "Hi " . $_COOKIE["username"] . "1";
            }
              else {
                echo "Welcome Guest!";
              }
           ?>
        </h2>
        <p class="content">
          Don't worry, we won't be gone too long!
           Check back in a couple hours
        </p>

        <form action="/wordpress/wp-content/cookie_setter.php" method="POST">
          <input type="text" name="username">

          <input type="submit" name="submitButton" value="Save Cookie!">

        </form>
      </div>
    </div>

  </body>
</html>

<!-- HTML Code goes in between these comment lines (above here) -->

<?php
/* This passes control back to the wordpress upgrade routine */
die();
/* Don't change this */
?>
