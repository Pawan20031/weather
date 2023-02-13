let weather = {
    "apikey": "13a9fcfb07e5c4acb1ab03b669397d4d",
    fetchWeather: function (cityy) {
        fetch(
            "https://api.openweathermap.org/data/2.5/weather?q="
            +cityy+
            "&units=metric&appid="
            +this.apikey
        )
            .then((response) => response.json())
            .then((data) => this.displayWeather(data));
    },
    displayWeather:function(data){
        const { name }=data;
        const {icon,description}=data.weather[0];
        const {temp,humidity,pressure}=data.main;
        const {sunrise,sunset}=data.sys;
        const {speed}=data.wind;

        console.log(name,icon,description,temp,humidity,speed,pressure);
        document.querySelector(".cityy").innerHTML=name;
        document.querySelector(".icon").src="https://openweathermap.org/img/wn/"+icon+"@2x.png";
        document.querySelector(".desc").innerHTML=description;
        document.querySelector(".humidity").innerHTML="Humidity : "+humidity+"%";
        document.querySelector(".wind").innerHTML="Wind Speed : "+speed+" meter/sec";
        document.querySelector(".temp").innerHTML=temp+"°C";
        document.querySelector(".pressure").innerHTML="Pressure : "+pressure +" hPa";
        document.querySelector(".sunrise").innerHTML="Sunrise : "+window.moment(sunrise * 1000).format('HH:mm A');
        document.querySelector(".sunset").innerHTML="Sunset : "+window.moment(sunset * 1000).format('HH:mm A');
        // document.querySelector(".sunset").innerHTML=sunset;
        // document.querySelector(".sunset").innerHTML=window.moment(sunset).format('LT');

    },
    search:function(){
        this.fetchWeather(document.getElementById("city").value);
    }
};
document.getElementById("searchbtn").addEventListener("click",function(){
    weather.search();
});
// console.log("dyugdydg");
document.getElementById("city").addEventListener("keyup",function(event){
    if(event.key=="Enter"){
        weather.search();
        alert("dd");
    }
});

weather.fetchWeather("New delhi");
