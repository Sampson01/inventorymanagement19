<?php
  require "header.php";
?>

    <main>
      <?php
        if (isset($_SESSION['userID'])) {
          echo "You are logged in!";
        }
        else {
          echo "You are logged out!";
        }
       ?>


       <body>

          <nav>

                  <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="product-entry.html">Product Entry</a></li>
                    <li><a href="product-editor.html">Product Editor</a></li>
                    <li><a href="billing.html">Billing</a></li>
                  </ul>
          </nav>


       </body>

    </main>


<?php
  require "footer.php"
?>
