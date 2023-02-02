<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- CDN Links-->
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <!-- <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script> -->

  <!-- CDN Links End -->

  <link rel="stylesheet" href="styles.css" />
  <title>Login Page</title>
</head>

<body>

  <!-- <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" alt="" />
      </a>
    </nav> -->

  <h1>Welcome to <span class="doc-head">Docquity</span></h1>

  <form class="form_container" action="auth.php" id="form1" method="POST">
    <div class="headingsContainer">
      <div class="imgContainer">
        <img src="logo.png" alt="" />
      </div>

      <h3>Sign in</h3>

      <div class="errContainer" id="errBox">
        <h4 id="errtxt">Please enter valid details</h4>
      </div>

    </div>

    <div class="mainContainer">

      <label for="email">Your Email</label>
      <input type="email" id="email_id" placeholder="Enter email" name="email" required />

      <br /><br />

      <label for="password">Your password</label>
      <input type="password" placeholder="Enter password" name="password" id="pass_id" required />
      <br />

      <button id="btn_submit" type="submit" onclick="authenticate();">Login</button>

      <p class="register">
        Not a member? <a href="signup.php">Register here!</a>
      </p>
    </div>

  </form>

  <footer>
    <lottie-player class="img_lottie" src="https://assets6.lottiefiles.com/packages/lf20_zmywgnrb.json"
      background="transparent" speed="0.7" style="width: 100px; height: 100px" loop autoplay>
    </lottie-player>
  </footer>

  <script src="script.js"></script>

  <?php
    if(isset($_POST["btn_submit"])){
      $email = mysqli_real_escape_string($db, $_POST["email"]);
      $password = mysqli_real_escape_string($db, $_POST["password"]);

      $pass = md5($password);

      $query = "SELECT * FROM `p_user` WHERE Email = '$email' AND Password = '$pass' ";

      $result = mysqli_query($db, $query);

      if (mysqli_num_rows($result) >= 1) {

        header('Refresh: 4;URL=http://localhost/loginpage/auth.php');

      } else {
          ?>
            <div id="invalid_user"> <p> Invalid User</p></div>
          <?php
      }
    }
  ?>


</body>

</html>