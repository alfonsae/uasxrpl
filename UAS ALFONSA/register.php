<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>REGISTER</title>
  <link rel="stylesheet" href="register.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
</head>
<body>
    <div class="center">
        <div class="container">
        <div class="logo"><img src="logo.png"></div>
        <form id="signup-form" action="daftar.php" method="POST" >
            <div class="data">
                <label>Username</label>
                <input type="text" name="username" required>
            </div>
            <div class="data">
                <label>Email</label>
                <input type="email" name="email" required>
            </div>
            <div class="data">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="btn">
                <div class="inner"></div>
                <button type="submit">Sign-Up</button>
            </div>
            <div class="signup-link">
            Have an account?<a href="#" onclick="toggleForm()">Login</a>
            </div>
        </form>
        <form id="login-form" action="validasi.php" style="display: none;" method="POST">
            <div class="data">
                <label>Email or Phone</label>
                <input type="text" name="email" required>
            </div>
            <div class="data">
                <label>Password</label>
                <input type="password" name="password" required>
            </div>
            <div class="forgot-pass">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="btn">
            <div class="inner"></div>
                <button type="submit">Login</button>
            </div>
            <div class="signup-link">
            Don't have an account?<a href="#" onclick="toggleForm()">Sign-Up</a>
            </div>
        </form>
        </div>
    </div>

  <script>
    function toggleForm() {
        var signupForm = document.getElementById("signup-form");
        var loginForm = document.getElementById("login-form");

        signupForm.style.display = (signupForm.style.display === "none") ? "block" : "none";
        loginForm.style.display = (loginForm.style.display === "none") ? "block" : "none";
    }
  </script>
</body>
</html>