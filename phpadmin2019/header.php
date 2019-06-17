<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="This is an example of a meta description. Will show up in search results.">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Q's App</title>

  </head>

      <header>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">


        </script>

        <style>
        @import url('https://fonts.googleapis.com/css?family=Bree+Serif|Sedgwick+Ave+Display');
        .container{
          width:50%;

        }
        .form-signin,.form-control,button{
          margin: 20px;
          padding: 20px;
        }
        #head{
        background-color: f8f8f8;
        padding: 20px;
        font-size:40px;
        font-family: 'Bree Serif', serif;
        }

        </style>






          <div>
            <?php
              if (isset($_SESSION['userID'])) {
                echo '<form action="includes/logout.inc.php" method="post">
                  <button type="submit" name="logout-submit">Logout</button>
                  </form>';
              }
              else {
                echo '<form action="includes/login.inc.php" method="post">
            <!--
                    <input type="text" name="mailuid" placeholder="Username/E-mail">
                    <input type="password" name="pwd" placeholder="Password">
                    <button type="submit" name="login-submit">Login</button>

            -->
                             <div id="head"><span class="glyphicon glyphicon-grain" style="color:green;"></span><span style="color:green;">Qs </span>Inventory<span style="color:green;">Management</span></div>

                           <div class="container" id="loginDiv">

                                 <form class="form-signin">
                                   <h3 class="form-signin-heading">Member Login</h3>

                                   <label for="uname" class="sr-only">Staff ID</label>
                                   <input type="text" id="inputEmail" class="form-control" name="mailuid" placeholder="Staff ID" required autofocus="">

                                   <label for="psw" class="sr-only">Password</label>
                                   <input type="password" id="inputPassword" class="form-control" name="pwd" placeholder="Password" name="psw" required autofocus="">
                           <center>


                                   <!-- <div class="checkbox">
                                     <label>
                                       <input type="checkbox" checked="checked" name="remember"value="remember-me"> Remember me
                                     </label>
                                   </div> -->

                                   <button type="submit" class="btn btn-lg btn-primary btn-block" name=login-submit action="includes/login.inc.php" method="post">LogIn</button>
                           </center>
                                 </form>

                               </div>



                  </form>
                  <a href="signup.php" name="signup-submit">Signup</a>
                  <form action="includes/logout.inc.php" method="post">
                      <button type="submit" name="logout-submit">Logout</button>
                    </form>';

              }

             ?>



          </div>

      </header>
