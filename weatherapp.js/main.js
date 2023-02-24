const api={
    key:"49cc8c821cd2aff9af04c9f98c36eb74",
    base:"https://api.openweathermap.org/data/2.5/"
}
const searchbox= document.querySelector('.search-box');
searchbox.addEventListener('keypress',setquery);

function setquery(evt){
    if(evt.keyCode==13){
        getResults(searchbox.value);
        console.log(searchbox.value);

    }
}

function getResults(query){
    fetch(`${api.base}weather?q=${query}&units=metric&APPID=${api.key}`)
    .then(weather=>{
        return weather.json();
    }).then(displayResults);
}
    function displayResults(weather){
        console.log(weather);
        let city= document.querySelector('.location .city');
        city.innerText= `${weather.name}, ${weather.sys.country}`;

        let now =new Date();
        let date=document.querySelector('.location .date');
        date.innerText=dateBuilder(now);

        let temp=document.querySelector('.current .temp');
        temp.innerHTML=`${Math.round(weather.main.temp).toFixed(0)}<span> °C </span>`;

        let weather_el =document.querySelector('.current .weather');
        weather_el.innerText=weather.weather[0].main;

        let hilow=document.querySelector('.hi-low');
        hilow.innerText=`${Math.round(weather.main.temp_min)}°C /${Math.round(weather.main.temp_max)}°C`;
         

    }
function dateBuilder(d){
let months=["January","February","March","April","May","June","July","August"
,"September","October","November","December"];
let days=["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];

let day=days[d.getDay()];
let date=d.getDate();
let month=months[d.getMonth()];
let year=d.getFullYear();

return `${day},${date},${month},${year}`;
}
//Javascripts for toggle menu
 var topnavs=document.getElementById("topnavs");
 function showMenu(){
     topnavs.style.right="0";
 }
 function showMenu(){
    topnavs.style.right="-200px";
}

var card=document.getElementById("card")
function openRegister(){
    card.style.transform= "rotate(-180deg)"
}
function openlogin(){
    card.style.transform= "rotate(0deg)"
}

//WEATHER APP JAVA SCRIPT
const timeEl = document.getElementById('time');
const dateEl = document.getElementById('date');
const currentWeatherItemsEl = document.getElementById
('current-weather-items');
const timezone = document.getElementById('time-zone');
const countryEl = document.getElementById('country');
const weatherForecastEl = document.getElementById('weather-forecast');
const currentTempEl = document.getElementById('current-temp');


const days = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday']
const months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];

const API_KEY ='49cc8c821cd2aff9af04c9f98c36eb74';

setInterval(() => {
    const time = new Date();
    const month = time.getMonth();
    const date = time.getDate();
    const day = time.getDay();
    const hour = time.getHours();
    const hoursIn12HrFormat = hour >= 13 ? hour %12: hour
    const minutes = time.getMinutes();
    const ampm = hour >=12 ? 'PM' : 'AM'

    timeEl.innerHTML = (hoursIn12HrFormat < 10? '0'+hoursIn12HrFormat : hoursIn12HrFormat) + ':' + (minutes < 10? '0'+minutes: minutes)+ ' ' +  `<span
     id= "am-pm">${ampm}</span>`

    dateEl.innerHTML = days[day] + ', ' + date+ ' ' + months[month]

}, 1000);




function showWeatherData (data){
    let {humidity, pressure, sunrise, sunset, wind_speed} = data.current;

    timezone.innerHTML = data.timezone;
    countryEl.innerHTML = data.lat + 'N ' + data.lon+'E'

    currentWeatherItemsEl.innerHTML = 
    `<div class="weather-item">
        <div>Humidity</div>
        <div>${humidity}%</div>
    </div>
    <div class="weather-item">
        <div>Pressure</div>
        <div>${pressure}</div>
    </div>
    <div class="weather-item">
        <div>Wind Speed</div>
        <div>${wind_speed}</div>
    </div>

    <div class="weather-item">
        <div>Sunrise</div>
        <div>${window.moment(sunrise * 1000).format('HH:mm a')}</div>
    </div>
    <div class="weather-item">
        <div>Sunset</div>
        <div>${window.moment(sunset*1000).format('HH:mm a')}</div>
    </div>
    
    
    `;

    let otherDayForcast = ''
    data.daily.forEach((day, idx) => {
        if(idx == 0){
            currentTempEl.innerHTML = `
            <img src="http://openweathermap.org/img/wn//${day.weather[0].icon}@4x.png" alt="weather icon" class="w-icon">
            <div class="other">
                <div class="day">${window.moment(day.dt*1000).format('dddd')}</div>
                <div class="temp">Night - ${day.temp.night}&#176;C</div>
                <div class="temp">Day - ${day.temp.day}&#176;C</div>
            </div>
            
            `
        }else{
            otherDayForcast += `
            <div class="weather-forecast-item">
                <div class="day">${window.moment(day.dt*1000).format('ddd')}</div>
                <img src="http://openweathermap.org/img/wn/${day.weather[0].icon}@2x.png" alt="weather icon" class="w-icon">
                <div class="temp">Night - ${day.temp.night}&#176;C</div>
                <div class="temp">Day - ${day.temp.day}&#176;C</div>
            </div>
            
            `
        }
    })


    weatherForecastEl.innerHTML = otherDayForcast;
}






