<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
      <?php
      echo "<h2>" . session_id() . "</h2>";
           if(isset($_POST["btnLogin"])){
            $email = $_POST["email"];
            $pass = $_POST["pass"];
               // lưu session
               $_SESSION["email"]=$email;
               $_SESSION["pass"]=$pass;

               echo "<h2>" .$_SESSION["email"] . "</h2>";
              //kiểm tra có remember
              $ck = $_POST["remember"];
              //echo $ck;
              if(isset($ck)){
                  setcookie("email",$_email,time()+3600);
                  setcookie("pass",$_passl,time()+3600);
              }
        header("Location:session-result.php");


           }
       ?>

      <section>
      <form action="" method="POST">
  <div class="mb-3">
    <label for="email" class="form-label">Email address</label>
    <input type="email" name ="email" class="form-control" id="email" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="pass" class="form-label">Password</label>
    <input type="password" name="pass" class="form-control" id="pass">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="remember" name="remember">
    <label class="form-check-label" for="remember">Remember</label>
  </div>
  <button type="submit" name="btnLogin" class="btn btn-primary">Submit</button>
</form>
      </section>
</body>
</html>