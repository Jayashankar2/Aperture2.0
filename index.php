<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aperture</title>
    <link rel="stylesheet" href="stylesheet/style.css">
</head>
<body>
  <div class="container">
    <div class="logo">
      <span>AP</span>ERTURE
    </div>
    <div class="box">

    </div>
    <div class="loginForm">
      
      <div>
      <span>Login</span>
        <form class="" action="login.inc.php" method="post">
          <input type="text" name="username" placeholder="Username or Email" required="required"><br/>
          <input type="password" name="password" placeholder="Password" required="required"><br/>
          <button type="submit" name="login">Login</button>
        </form>
        <div class="links">
          <a href="signup.php"><button>Create new account</button></a><br/>
          <a href="#"><button>Forgot password</button></a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
