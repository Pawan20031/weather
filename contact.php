<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="index.css">
  <link rel="shortcut icon" href="weather.png" type="image/x-icon">
  <script src="sweetalert2.all.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="sweetalert2.min.js"></script>
  <link rel="stylesheet" href="sweetalert2.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <title>Contact Me</title>
</head>

<body>
  <?php
  $a = "";
  $b = -2;

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['email'])) {
      $email = $_POST['email'];
    }
    if (isset($_POST['name'])) {
      $name = $_POST['name'];
    }
    if (isset($_POST['msg'])) {
      $message = $_POST['msg'];
    }
    if (isset($_POST['submit'])) {
      $submit = $_POST['submit'];
    }
    if (empty($_POST['name'])) {
      $a = "ERROR! Please Enter your Name";
      $b = 0;
    } else if (empty($_POST['email'])) {
      $a = "ERROR! Please Enter your Email";
      $b = 0;
    } else if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
      $a = "ERROR! Please Enter your correct Name";
      $b = 0;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $a = "ERROR! Please Enter your correct Email";
      $b = 0;
    } else {
      $con = mysqli_connect("localhost:3307", "root", "", "weather");
      if ($con) {

        $sql = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email','$message');";

        if ($con->query($sql) == true) {
          $b = 1;
          echo "<script>
    Swal.fire({
      position: 'top-end',
      icon: 'success',
      title: 'Successfully Submitted',
      showConfirmButton: false,
      timer: 1500
    })
    </script>";
        } else {
          $a = "error:
    $sql";
          $b = 0;
        }
      } else {
        $a = "eroorr";
        $b = 0;
      }
      $con->close();
    }
  }
  if ($b == 0) {
    echo "<script>
    Swal.fire({
      icon: 'error',
      title: 'Oops...',
      text: 'Something went wrong!',
      
    })
    </script>";
  }
  ?>
  <nav>
    <ul class="navlist" style="background:black; padding:2rem">
      <div class="logo"><img src="weather1.png" width="43px" alt=""></div>
      <li>
        <a href="index.php" rel="noopener noreferrer">Home</a>
      </li>

      <li>
        <a href="contact.php" target="_blank" rel="noopener noreferrer">Contact Me</a>
      </li>
    </ul>
  </nav>
  <div class="form background animate__animated animate__bounceInDown">
    <div class="dic">
      <h2>Contact Me</h2>
    </div>
    <form method="post" action="contact.php">
      <input type="text" name="name" placeholder="Enter Your Name..." />
      <input type="email" name="email" id="email" placeholder="Enter Your Email..." />
      <textarea name="msg" placeholder="Enter Your Message..." id="" cols="30" rows="10"></textarea>
      <input type="submit" value="Submit" name="submit" class="sbt" />
    </form>
    <div class="icons">
      <div class="media">
        <a href="mailto:pawank@gmail.com" target="_blank"><img src="My Portforlio/email.png" alt="" /></a>
        <a href="https://www.linkedin.com/in/pawan-kumar-6584b322a" target="_blank"><img src="My Portforlio/linkedin.png" alt="" /></a>
        <a href="https://github.com/Pawan20031" target="_blank"><img src="My Portforlio/github.png" alt="" /></a>
        <a href="https://www.facebook.com/profile.php?id=100025813939509" target="_blank"><img src="My Portforlio/fb.png" alt="" /></a>
        <a href="https://www.instagram.com/pawan_kumar2003/" target="_blank"><img src="My Portforlio/instra.png" alt="" /></a>
        <a href="https://twitter.com/pawank2114" target="_blank"><img src="My Portforlio/twitter.png" alt="" /></a>
      </div>
    </div>
    <footer class="footer ">
      <h1 class="end">&#169; 2023 Copyright : RapidWeather.com</h1>
    </footer>
  </div>

</body>

</html>