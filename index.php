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
       <header>
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
       
          
           
           <main>

            <input type="text" autocomplete="off" class="search-box" placeholder="Search for a city.."/>
            
               <section class="location">
                   <div class ="city">Nairobi,Kenya</div>
                   <div class="date">Thursday 10 february 2020</div>
               </section>
               <section>
                   <div class="current">
                      <div class="temp">15<span>°C</span></div> 
                      <div class="weather">sunny</div>
                      <div class="hi-low">13°C/16°C</div>

                    </section>
                    <div class="home"> Welcome to Agriweather
                        <p>we provide realtime weather updates predictions and forecasts </p>
                    </div>
                </section>
            </header>
            <!---about us-->
                    <section class ="about">
                  <h1>What We Offer</h1>
                        <p> We help farmers optimize their produce by providing realtime weather updates</p>
                   <div class="row">

                       <div class="about-col">
                      <h3> Weather updates</h3>
                     <p>We have partnered with the meteorological servives to provide up to date weather updates that can aid farmers in decision making</p> </div>
                    
                    <div class="about-col">
                        <h3> Agro-advisory</h3>
                       <p>Farmers can get help from agriculturla extension officiers who can then make an analysis of the weather and provide expert</p></div>
                       
                       <div class="about-col">
                        <h3>Location tracking</h3>
                       <p>We have made it easy for you to track your location know what weather patterns are like in your area</p></div>

                    </section>
                   
                    <!--crops-->
                    <section class="crops">
                        <h1>Crops grown in Kenya</h1>
                        <p>This are some of the crops grown on large scale in kenya </p>
                       <div class="row">

                       
                        <div class="crops-col">
                      <img src="tea.jpeg" alt="">
                      <div class="layer">
                          <h3>Tea</h3>
                      </div>
                      <p>Tea is planted in an area of over 157,720 hectares, with production of about 345,817 metric tonnes made of tea. Over 325,533 metric tonnes exported. <br>Vegetative propagation of high-yielding, well-adapted clones. Over 49 varieties so far developed by the Tea Research Foundation of Kenya (TRFK).</p>
                      </div>

                      <div class="crops-col">
                        <img src="coffee2.jpg" alt="">
                        <div class="layer">
                            <h3>Coffee</h3>
                        </div>
                        <p>Most of Kenya’s coffee is grown at elevations ranging from 1,400 meters to 2,000 meters above sea level in the volcanic soils on the high plateaus surrounding the snow-capped Mt. Kenya and the foothills of the Aberdare Range.
                            The area that spans from 17,000-foot Mt. Kenya south toward the capital of Nairobi is a major coffee growing region, while a smaller growing region is found near the border with Uganda on the hills of Mt. Elgon.</p>
                      </div>
                        <div class="crops-col">
                            <img src="banana.jpg" alt="">
                            <div class="layer">
                                <h3>Banana</h3>
                            </div>
                            <p><p>Most of Kenya’s coffee is grown at elevations ranging from 1,400 meters to 2,000 meters above sea level in the volcanic soils on the high plateaus surrounding the snow-capped Mt. Kenya and the foothills of the Aberdare Range.
                                The area that spans from 17,000-foot Mt. Kenya south toward the capital of Nairobi is a major coffee growing region, while a smaller growing region is found near the border with Uganda on the hills of Mt. Elgon.</p></p>
                        </div>
                        </div>
                    </section>


                     <!---section testimomials-->
                    <section class="testimonials">
                        <h1> what farmers say</h1>
                        <p> Farmers who experienced the piloting of this experience have this to say</p>
                        <div class="row">
                        <div class="testimonial-col">
                            <img src="farmer1.jfif" alt="">
                            <div>
                                <p>This service helped me cut operational costs and save more money</p>
                                <h3>Veronica Kemunto</h3>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                        </div>

                        <div class="testimonial-col">
                            <img src="farmer2.jpg" alt="">
                            <div>
                                <p>This service helped me cut operational costs and save more money</p>
                                <h3>Kennedy Macharia</h3>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div> </div>
                    </section>
              <!--call to action section-->
            <section class="cta">
                <h1> Register to experience our services</h1>
              <a href=""class="hero-btn">Contact Us</a>
            </section>
  

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