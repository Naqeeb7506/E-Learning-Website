
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>E-Learning Web | Login</title>
    <link rel="stylesheet" href="login.css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/elearning.png" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div class="main">
      <div class="box">
        <ul>
          <li><a href="#" class="active" data-tab="login">User Login</a></li>
          <li><a href="#" data-tab="signup">Sign Up</a></li>
          <li><a href="#" data-tab="admin">Admin Login</a></li>
        </ul>
        <!--  -->
        <div class="login" id="login">
          <form method="POST" action="./login.php">
            <label for="username"
              >Username
              <input type="text" name="email" id="email" />
            </label>
            <br />
            <label for="password"
              >Password
              <input type="password" name="password" id="password" />
            </label>
            <br />
            <div class="check">
              <input type="checkbox" name="checkbox" id="checkbox" />
              <p>Remember Me</p>
            </div>
            <button>Login</button>
            <div class="forget">
              <a href="#">Forgot your password?</a>
            </div>
          </form>
        </div>

        <!--  -->
        <div class="signup display" id="signup">
          <form method="POST" action="./signup.php">
            <label for="name"
              >Fullname
              <input type="text" name="name" id="name" />
            </label>
            <br />
            <label for="email"
              >email
              <input type="email" name="email" id="email" />
            </label>
            <br />
            <label for="password"
              >Password
              <input type="password" name="password" id="password" />
            </label>
            <br />
            <label for="password"
              >Confirm Password
              <input type="password" name="cpassword" id="cpassword" />
            </label>
            <br />
            <button>Sign Up</button>
          </form>
        </div>

        <!--  -->
        <div class="admin display" id="admin">
          <form action="admin.php" method="POST">
            <label for="username"
              >Admin name
              <input type="text" name="email" id="email" />
            </label>
            <br />
            <label for="password"
              >Password
              <input type="password" name="password" id="password" />
            </label>
            <br />
            <button>Login</button>
            <div class="forget">
              <a href="#">Forgot your password?</a>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- js -->
    <script src="login.js"></script>
  </body>
</html>
