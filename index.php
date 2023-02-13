<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="index.css" />
  <link rel="shortcut icon" href="weather.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
  <script src="index.js" defer></script>


  <title>Weather</title>
</head>

<body>
  <div class="nav ">
    <nav>
      <ul class="navlist">
        <div class="logo"><img src="weather1.png" width="43px" alt=""></div>
        <li>
          <a href="index.php" rel="noopener noreferrer">Home</a>
        </li>

        <li>
          <a href="contact.php" target="_blank" rel="noopener noreferrer">Contact Me</a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="card background">
    <div class="weather animate__animated animate__backInLeft">
      <div class="search">
        <input type="text" id="city" class="city" placeholder="Enter Your City Name" />
        <!-- <input type="submit" value="Search" class="searchbtn"> -->
        <button class="searchbtn" id="searchbtn" type="submit">
          <img src="srch.png" alt="" srcset="" width="25px" />Search
        </button>
      </div>
      <br /><br /><br />
      <div class="details">
        <h1 class="cityy"></h1>
        <div class="temp"></div>
        <br /><br />
      </div>
      <div class="ff">
        <img src="https://openweathermap.org/img/wn/01n@2x.png" alt="" class="icon" width="100px" />
        <div>
          <h2 class="desc"></h2>
        </div>
      </div>
      <div>
        <h2 class="humidity"></h2>
      </div>
      <br />
      <div>
        <h2 class="pressure"></h2>
      </div><br>
      <div>
        <h2 class="wind"></h2>
      </div><br>
      <div>
        <h2 class="sunrise"></h2>
      </div><br>
      <div>
        <h2 class="sunset"></h2>
      </div><br>
      <div class="fore">
        <a href="forecast.php" class="a">5-Day Weather Forecast</a>
      </div>
    </div>

    <footer class="footer ">
      <h1 class="end">&#169; 2023 Copyright : PawanWeather.com</h1>
    </footer>
  </div>
  <script src="https://momentjs.com/downloads/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="index.js" defer></script>
</body>

</html>