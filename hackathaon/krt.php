<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="krt.css" />
    <title>Login Page</title>
  </head>

  <body>
    <div class="container" id="container">
      <div class="form-container sign-up">
        <form action="adddata.php" method="post">
          <h1>Create Account</h1>
          <input type="text" placeholder="Name" name="">
          <input type="email" placeholder="Email"  name="helloo2">
          <input type="password" placeholder="Password"  name="helloo3">
          <button><a href ="index1.htm"> Sign Up</button>
        </form>
      </div>
      <div class="form-container sign-in">
        <form>
          <h1>Log In</h1>

          <div class="email-container field-container">
            <span>Email:</span>
            <input type="email" placeholder="someone@gmail.com" />
          </div>
          <div class="password-block-container field-container">
            <span>Password:</span>
            <div class="password-container">
              <input type="password" placeholder="password" />
              <div class="show-password">
                <i class="fa-regular fa-eye-slash"></i>
              </div>
            </div>
          </div>

          <a href="#">Forgot Password?</a>
         <a href="index1.html"> Log In</a>
        </form>
      </div>
      <div class="toggle-container">
        <div class="toggle">
          <div class="toggle-panel toggle-left">
            <h1>Welcome Back!</h1>
            <p>Enter your personal details to use all of site features</p>
            <button class="hidden" id="login">Log In</button>
          </div>
          <div class="toggle-panel toggle-right">
            <h1>Hello, Friend!</h1>
            <p>
              Register with your personal details to use all of site features
            </p>
            <button class="hidden" id="register">Sign Up</button>
          </div>
        </div>
      </div>
    </div>

    <script src="krt.js"></script>
  </body>
</html>
