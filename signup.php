<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
  <link rel="stylesheet" href="styles.css" />
  <title>Signup Page</title>
</head>

<body>
  <h1>Welcome to <span class="doc-head">Docquity</span></h1>

  <form class="form_container" action="register.php" method="POST" id="form2">

    <div class="headingsContainer">

      <div class="imgContainer">
        <img src="logo.png" alt="" />
      </div>

      <h3>Sign up</h3>

      <div class="errContainer" id="errBox">
        <h4 id="errtxt">Please enter valid details</h4>
      </div>

    </div>

    <div class="mainContainer">

      <label for="name">Your Name</label>

      <input type="text" id="name_id" placeholder="Enter name" name="name" required />

      <br /><br />


      <label for="username">Your Username</label>

      <input type="text" id="user_id" placeholder="Enter username" name="username" required />

      <br /><br />

      <label for="number">Your Phone Number</label>

      <input type="number" id="phone_id" placeholder="Enter phone number" name="phone" required />

      <br /><br />

      <label for="email">Your Email</label>
      <input type="email" id="email_id" placeholder="Enter email" name="email" required />

      <br /><br />

      <label for="password">Your Password</label>
      <input name="password" id="pass_id" type="password" placeholder="Enter password" required />
      <br />

      <div class="passBox" id="passBoxHint">
        <p class="passHint">Password must contain 8 or more characters, with at least one number and one uppercase and
          one lowercase letter</p>
      </div>

      <button id="btn_submit" type="submit" onclick="return authenticate()">Register</button>

      <p class="register">Registered ? <a href="login.php">Login Here!</a></p>
    </div>
  </form>

  <footer>
    <lottie-player class="img_lottie" src="https://assets6.lottiefiles.com/packages/lf20_zmywgnrb.json"
      background="transparent" speed="0.7" style="width: 100px; height: 100px" loop autoplay>
    </lottie-player>
  </footer>

  <script src="script.js"></script>
</body>

</html>