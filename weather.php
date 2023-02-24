<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv ="X-UA-compatible" content="ie=edge">
        <title>Document</title>
        <title>Weather App</title>
        <!--font awesome cdn link-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="main.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    </head>
    <body>
       <section class="sub-header1">
            <nav>
                <a href="#" class="logo"><i class=" fas fa-cloud-sun"></i>Agriweather</a>


                <div class="topnav" id="topnavs">
                    <i class="far fa-window-close" onclick="hidemenu()"></i>
                    <ul>
                        <li>  <a href="index.php">Home</a></li>
                         <li> <a href="About.php">About</a></li>
                        <li> <a href="signin.php">Sign in</a></li>
                         <li> <a href="weather.php">Weather information</a></li>
                        <li> <a href="Agro-advisory.php">Agro-advisory</a></li>
                          </ul>
                    <i class="fas fa-bars" onclick="showmenu()"></i>
                     </div>
                
                  </nav>   
                  
       </section>
       <!--WEATHER INFORMATION PAGE-->
       <section>
        <div class="container1">
            <div class="current-info">
    
                <div class="date-container">
                    <div class="time" id="time">
                        12:30 <span id="am-pm">PM</span>
                    </div>
                    <div class="date" id="date">
                        Monday, 25 May
                    </div>
    
                    <div class="others" id="current-weather-items">
                      <div class="weather-item">
                          <div>Humidity</div>
                          <div>95.2%</div>
                      </div> 

                      <div class="weather-item">
                        <div>Pressure</div>
                        <div>121</div>
                    </div> 
                    <div class="weather-item">
                        <div>Wind speed</div>
                        <div>222</div>
                    </div>  
                    </div>
                </div>
    
                <div class="place-container">
                    <div class="time-zone" id="time-zone">Africa/Nairobi</div>
                    <div id="country" class="country">KE</div>
                </div>
            </div>
    
            
        </div>
    
        <div class="future-forecast">
            <div class="today" id="current-temp">
                <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                <div class="other">
                    <div class="day">Monday</div>
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
            </div>
    
            <div class="weather-forecast" id="weather-forecast">
                <div class="weather-forecast-item">
                    <div class="day">Tue</div>
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
                <div class="weather-forecast-item">
                    <div class="day">Wed</div>
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
                <div class="weather-forecast-item">
                    <div class="day">Thur</div>
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
                <div class="weather-forecast-item">
                    <div class="day">Fri</div>
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
                <div class="weather-forecast-item">
                    <div class="day">Sat</div>
                    <img src="http://openweathermap.org/img/wn/10d@2x.png" alt="weather icon" class="w-icon">
                    <div class="temp">Night - 25.6&#176; C</div>
                    <div class="temp">Day - 35.6&#176; C</div>
                </div>
    
            </div>
        </div>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        
       </section>
          
   
          
            
             
            
<!--footer section-->

           
       
        <script src="main.js"></script>
    </body>
</html>