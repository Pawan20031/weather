var newName = document.getElementById("city");
let weather = {
  apikey: "e70bb2f033b00ed1a5e35439c29b6cb1",
  fetchWeather: function (cityy) {
    fetch(
      "https://api.openweathermap.org/data/2.5/forecast?q=" +
        cityy +
        "&units=metric&appid=" +
        this.apikey
    )
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        const { citty } = data.city.name;
        // alert(data.city.name);
        for (i = 0; i < 5; i++) {
          document.getElementById("day" + (i + 1) + "Min").innerHTML =
            "Min Temp: " +
            Number(data.list[i].main.temp_min).toFixed(1) +
            "°";
          //Number(1.3450001).toFixed(2); // 1.35
        }

        for (i = 0; i < 5; i++) {
          document.getElementById("pressure" + i).innerHTML =
            "Pressure : " +
            Number(data.list[i].main.pressure).toFixed(2) +
            "hPa";
        }
        for (i = 0; i < 5; i++) {
          document.getElementById("temp" + i).innerHTML =
            Number(data.list[i].main.temp).toFixed(2) + "°";
        }
        for (i = 0; i < 5; i++) {
          document.getElementById("humidity" + i).innerHTML =
            "Humidity: " + Number(data.list[i].main.humidity).toFixed(2) + "%";
        }
        for (i = 0; i < 5; i++) {
          document.getElementById("day" + (i + 1) + "Max").innerHTML =
            "Max Temp: " +
            Number(data.list[i].main.temp_max).toFixed(2) +
            "°";
        }
        // for (i = 0; i < 5; i++) {
        //   document.getElementById("de" + (i + 1)).innerHTML = Number(
        //     data.list[i].weather[0].description.toFixed(2)
        //   );
        //   //   console.log(data.list[i].weather[0].description);
        // }

        //------------------------------------------------------------

        //Getting Weather Icons
        for (i = 0; i < 5; i++) {
          document.getElementById("img" + (i + 1)).src =
            "http://openweathermap.org/img/wn/" +
            data.list[i].weather[0].icon +
            ".png";
        }

        //------------------------------------------------------------
        console.log(data);
        console.log(data.list[1].wind.speed);
        for (i = 0; i < 5; i++) {
          document.getElementById("de" + (i + 1)).innerHTML =
            data.list[i].weather[0].description;
          //   console.log(data.list[i].weather[0].description);
        }
        for (i = 0; i < 5; i++) {
            document.getElementById("windd" + (i + 1)).innerHTML ="Wind Speed: " +
              Number(data.list[i].wind.speed).toFixed(2)+" m/s";
          }
      })
      .catch((err) =>
        alert("Something Went Wrong: Try Checking Your Internet Coneciton")
      );
  },
  search: function () {
    this.fetchWeather(document.getElementById("city").value);
  },
};
document.getElementById("searchbtn").addEventListener("click", function () {
  weather.search();

  document.querySelector(".div").innerHTML =
    "5-Day Weather Forecast, " + newName.value;
});
// console.log("dyugdydg");
document.getElementById("city").addEventListener("keyup", function (event) {
  if (event.key == "Enter") {
    weather.search();
    alert("dd");
  }
});

weather.fetchWeather("New delhi");

// function showWeatherData(data) {
//   let other = "";
//   data.list.forEach((day, idx) => {
//     other += `

//         <div class="one">
//             <h1 class="day">${day.dt_txt}</h1>
//             <br>
//             <div class="temp"></div>
//             <br /><br />

//             <div class="ff">
//                 <img src="https://openweathermap.org/img/wn/01n@2x.png" alt="" class="icon" width="100px" />
//                 <div>
//                     <h2 class="desc"></h2>
//                 </div>
//             </div>
//             <div>
//                 <h2 class="humidity"></h2>
//             </div>
//             <br />
//             <div>
//                 <h2 class="pressure"></h2>
//             </div><br>
//             <div>
//                 <h2 class="wind"></h2>
//             </div><br>
//             <div>
//                 <h2 class="sunrise"></h2>
//             </div><br>
//             <div>
//                 <h2 class="sunset"></h2>
//             </div><br>
//         </div>

//         `;
//     console.log(moment(day.dt * 1000).format("ddd"));
//     // console.log(day);
//     // console.log(idx);
//   });
//   document.querySelector(".days").innerHTML = other;
var d = new Date();
var weekday = [
  "Sunday",
  "Monday",
  "Tuesday",
  "Wednesday",
  "Thursday",
  "Friday",
  "Saturday",
];
function CheckDay(day) {
  if (day + d.getDay() > 6) {
    return day + d.getDay() - 7;
  } else {
    return day + d.getDay();
  }
}

for (i = 0; i < 5; i++) {
  document.getElementById("day" + (i + 1)).innerHTML = weekday[CheckDay(i)];
}
// }

//     displayWeather:function(data){
//         const { name }=data;
//         const {icon,description}=data.weather[0];
//         const {temp,humidity,pressure}=data.main;
//         const {sunrise,sunset}=data.sys;
//         const {speed}=data.wind;

//         console.log(name,icon,description,temp,humidity,speed,pressure);
//         document.querySelector(".cityy").innerHTML=name;
//         document.querySelector(".icon").src="https://openweathermap.org/img/wn/"+icon+"@2x.png";
//         document.querySelector(".desc").innerHTML=description;
//         document.querySelector(".humidity").innerHTML="Humidity : "+humidity+"%";
//         document.querySelector(".wind").innerHTML="Wind Speed : "+speed+" meter/sec";
//         document.querySelector(".temp").innerHTML=temp+"°C";
//         document.querySelector(".pressure").innerHTML="Pressure : "+pressure +" hPa";
//         document.querySelector(".sunrise").innerHTML="Sunrise : "+window.moment(sunrise * 1000).format('HH:mm A');
//         document.querySelector(".sunset").innerHTML="Sunset : "+window.moment(sunset * 1000).format('HH:mm A');
//         // document.querySelector(".sunset").innerHTML=sunset;
//         // document.querySelector(".sunset").innerHTML=window.moment(sunset).format('LT');

//     },
//     search:function(){
//         this.fetchWeather(document.getElementById("city").value);
//     }
// };
// document.getElementById("searchbtn").addEventListener("click",function(){
//     weather.search();
// });
// // console.log("dyugdydg");
// document.getElementById("city").addEventListener("keyup",function(event){
//     if(event.key=="Enter"){
//         weather.search();
//         alert("dd");
//     }
// });

// weather.fetchWeather("New delhi");
