<?php 
 
include 'config.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: login.php");
}
 
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
         
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
 
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Registrasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="registrasi.css">
</head>
<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>Registrasi</h2>
        <div class="underline-title"></div>
      </div>
      <form action="index.php" method="post" class="form">
        <label for="user-username" style="padding-top:13px">
            &nbsp;Username
          </label>
        <input id="user-username" class="form-content"  name="email" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-email" style="padding-top:22px" >&nbsp;Email
          </label>
        <input id="user-email" class="form-content"  name="password" required/>
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px" >&nbsp;Password
          </label>
        <input id="user-password" class="form-content" type="password" name="password" required/>
        <div class="form-border"></div>
        <label for="user-confirmpassword" style="padding-top:22px" >&nbsp;Confirm Password
          </label>
        <input id="user-confirmpassword" class="form-content" type="password" name="password" required/>
        <div class="form-border"></div>
       <br>
            <label><input type="checkbox" name="remember" value="remember" /> I Agree to the Terms</label>
        <input id="submit-btn" type="submit" name="submit" value="SIGN UP" />
        <a href="login.php" id="signup">Already have an account? </a>
      </form>
    </div>
  </div>
</body>

</html>