<h2>
  <?php
    if (isset($_COOKIE["username"])) {
      echo "Hi " . $_COOKIE["username"] . "!";
    }
    else {
      echo "Welcome Guest!";
    }
   ?>
</h2>

<h2><b>Welcome</b> Guest!</h2>
