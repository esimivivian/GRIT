
<?php

session_start();


$connection = mysqli_connect("localhost","root","","weather");

if(isset($_POST['submit-btn']))
{
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    

    $email_query = "SELECT * FROM registration WHERE email='$email' ";
    $email_query_run = mysqli_query($connection, $email_query);
    if(mysqli_num_rows($email_query_run) > 0)
    {
        $_SESSION['status'] = "Email Already Taken. Please Try Another one.";
      
    }
    else
    {
        
        
            $query = "INSERT INTO registration(fullname,email,password) VALUES ('$fullname','$email','$password')";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "error";
                $_SESSION['status_code'] = "error";
                header('Location: signin.php');  
            }
        }
    
        
}
?>

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
                  <h1>LOG IN</h1>
      
             <div class="container">
             <div class="card">
                  <div class="inner-box" id="card">
                      <div class="card-front">
                          <h2>Register</h2>
                          <form action="" method="post">
                              <input type ="text" class="input-box" placeholder="Your Name" name="fullname"required>
                              <input type ="email" class="input-box" placeholder="Your Email "  name ="email" required>
                            
                              <input type ="password" class ="input-box" placeholder="password" name="password" required >
                              
                              <button type ="submit" class ="submit-btn" href="index.php">Submit</button>
                              
                          </form>
                          
                          
                      </div>
                      
                  </div>
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
       
        <script>
            var card=document.getElementById("card")
function openRegister(){
    card.style.transform= "rotateY(-180deg)"
}
function openLogin(){
    card.style.transform= "rotateY(0deg)"
}

        </script>
    </body>
</html>