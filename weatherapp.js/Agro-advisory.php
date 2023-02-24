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
                        <li> <a href="Ägro-advisory.php">Agro-advisory</a></li>
                          </ul>
                    <i class="fas fa-bars" onclick="showmenu()"></i>
                     </div>
                
                  </nav>   
                  <h1>AGRO-ADVISORY</h1>
       </section>
     <section class="Agro">
        <h1> AGRO-ADVISORS</h1>
        <p>Do yo need help?
        <br> These are professionals who have experience and have been commisioned to help farmers by use of their expertise</p>
        <div class="row">
        <div class="testimonial-col">
            <img src="agro1.jfif" alt="">
            <div>
                <p>Keith Mwangi has a long experience and his passion to help farmers is outstanding.<br>
                He has worked with coffee farmers accross the Rift-valley and Central Kenya too</p>
                <h3>Keith Mwangi</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </div>
        </div>

        <div class="testimonial-col">
            <img src="agro2.jfif" alt="">
            <div>
                <p>Amos Mwambu is a versatile individual whom you can approach with every need as a farmer and he will humbly provide knowledge on his farming exppertise</p>
                <h3>Amos Mwambu</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div> 
    
        <div class="testimonial-col">
            <img src="agro3.jfif" alt="">
            <div>
                <p>Daniella is keen about ensuring the farmers get the support needed to easen their frustration on effects of climate chnage <br>
                Her attention to details is very important and her welcoming personality makes it easier for farmers to communicate with her </p>
                <h3>Daniella Nasambu</h3>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>
    
    
    </div> 
     
     </section>
       <!--Review section--> 


       <section class="comment">
        <div class="comment-box">
            <h3>Leave a comment</h3>
            <form class="comment-form">
                <input type="text" placeholder="Enter name">
                <input type="email" placeholder="Enter email">
                <textarea rows="5" placeholder="Your review"></textarea>
                <button type="submit" class="hero-btn red-btn">Post review</button>
            </form>
        </div>
   

       </section>

           
          
            
             
            
     <!--section-->
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