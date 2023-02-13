<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="weather.png" type="image/x-icon">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="index.css">

    <title>Forecast</title>
</head>

<body>
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
    <div class="background">
        <div class="ee">
            <div class="search " align="center">
                <input type="text" id="city" class="city" placeholder="Enter Your City Name" />
                <!-- <input type="submit" value="Search" class="searchbtn"> -->
                <button class="searchbtn" id="searchbtn" type="submit">
                    <img src="srch.png" alt="" srcset="" width="25px" />Search
                </button>
            </div>
        </div>
        <div class="div">
            5-Day Weather Forecast, New Delhi
        </div>
        <div id="weatherContainer">
            <div id="iconsContainer">
                <div class="icons">
                    <p class="weatherr" id="day1"></p>
                    <p class="tempp" id="temp0">Loading...</p>
                    <div class="image"><img src="http://openweathermap.org/img/wn/dots.png" class="imgClass" id="img1">
                        <div class="de1" id="de1"></div>
                    </div>
                    <div class="flex">
                        <p class="press" id="pressure0">Loading...</p>
                        <p class="humid" id="humidity0">Loading...</p>
                        <p class="minValues" id="day1Min">Loading...</p>
                        <p class="maxValues" id="day1Max">Loading...</p>
                        <p id="windd1">Loading...</p>

                    </div>
                </div>
                <div class="icons">
                    <p class="weatherr" id="day2"></p>
                    <p class="tempp" id="temp1">Loading...</p>
                    <div class="image"><img src="http://openweathermap.org/img/wn/dots.png" class="imgClass" id="img2">
                        <div class="de2" id="de2"></div>
                    </div>
                    <div class="flex">
                        <p class="press" id="pressure1">Loading...</p>
                        <p class="humid" id="humidity1">Loading...</p>
                        <p class="minValues" id="day2Min">Loading...</p>
                        <p class="maxValues" id="day2Max">Loading...</p>
                        <p id="windd2">Loading...</p>

                    </div>
                </div>
                <div class="icons">
                    <p class="weatherr" id="day3"></p>
                    <p class="tempp" id="temp2">Loading...</p>
                    <div class="image"><img src="http://openweathermap.org/img/wn/dots.png" class="imgClass" id="img3">
                        <div class="de3" id="de3"></div>
                    </div>
                    <div class="flex">
                        <p class="press" id="pressure2">Loading...</p>
                        <p class="humid" id="humidity2">Loading...</p>
                        <p class="minValues" id="day3Min">Loading...</p>
                        <p class="maxValues" id="day3Max">Loading...</p>
                        <p id="windd3">Loading...</p>

                    </div>
                </div>
                <div class="icons">
                    <p class="weatherr" id="day4"></p>
                    <p class="tempp" id="temp3">Loading...</p>
                    <div class="image"><img src="http://openweathermap.org/img/wn/dots.png" class="imgClass" id="img4">
                        <div class="de4" id="de4"></div>
                    </div>
                    <div class="flex">
                        <p class="press" id="pressure3">Loading...</p>
                        <p class="humid" id="humidity3">Loading...</p>
                        <p class="minValues" id="day4Min">Loading...</p>
                        <p class="maxValues" id="day4Max">Loading...</p>
                        <p id="windd4">Loading...</p>

                    </div>
                </div>
                <div class="icons">
                    <p class="weatherr" id="day5"></p>
                    <p class="tempp" id="temp4">Loading...</p>
                    <div class="image"><img src="http://openweathermap.org/img/wn/dots.png" class="imgClass" id="img5">
                        <div class="de5" id="de5"></div>
                    </div>
                    <div class="flex">
                        <p class="press" id="pressure4">Loading...</p>
                        <p class="humid" id="humidity4">Loading...</p>
                        <p class="minValues" id="day5Min">Loading...</p>
                        <p class="maxValues" id="day5Max">Loading...</p>
                        <p id="windd5">Loading...</p>

                    </div>
                </div>

            </div>

        </div>

    </div>
    <script src="https://momentjs.com/downloads/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js" integrity="sha512-CryKbMe7sjSCDPl18jtJI5DR5jtkUWxPXWaLCst6QjH8wxDexfRJic2WRmRXmstr2Y8SxDDWuBO6CQC6IE4KTA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="forecast.js"></script>
</body>

</html>