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
       <section class="sub-header">
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
                  <h1>About us</h1>
       </section>
          
        <!-----about us content--->
    <section class="about-us">
        <div class="row">
         <div class="abouts-col">
              <h1>Our main concern is to help farmers increase their yield </h1>
              <p>The agricultural sector is extremely vulnerable to climate change largely due to
                the increasing temperatures, changing
                rainfall patterns and extreme weather
                events. Some crops are expected to experience more favourable growing conditions
                as a result of climate change, whereas others will find future climatic conditions intolerable. For example, maize yields are likely
                to increase in mixed rain-fed temperate  Areas </p>
               
         </div>
         <div class="abouts-col">
             <img src="farmer2.jpg" alt="">
         </div>

        </div>
        
        
        
        
        
            
             
            
<!--footer section-->
<section class="footer">
                        <h4>About Us</h4>
                   <p>This service has been brought to you by the the meteorology department of Kenya</p><p></p>
                   <div class ="icons">
                    <i class="fab fa-linkedin"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter-square"></i>
                    <i class="fab fa-facebook-square"></i>
                    
                   </div>
                </section>
           </main>
       
        <script src="main.js"></script>
    </body>
</html>