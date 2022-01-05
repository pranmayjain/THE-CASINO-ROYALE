<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>About Us</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="AboutUs.css">
    
    
</head>
<body>

     
  <div class="title">
    <h1> THE CASINO ARENA</h1>
    <a href="#">
        <img src="gambler.png">
    </a>
    <div class="player_info">
        <b id="player">Player Name</b>
        <br>
        <b id="money">Money</b>
        <br>
        <b id="id">ID</b>
    </div>

</div>



    <div class="header">

        <ul class="group">
              <li><a href="project.php">Home</a></li>
              <li><a href="project.php">Games</a></li>
              <li><a href="Pricing.php">Pricing</a></li>
              <li><a href="Contactus.php">Contact</a></li>
              <li><a href="AboutUs.php">About Us</a></li>
        </ul>
    </div>
    
    <div class="section">
        <div class="container">
            <div class ="content-section">
                <div style="background-color: aliceblue;color: black; padding: 20px; opacity: 0.7;">
                  <div class = "title">
                     <h1>About Us</h1>
                  </div>
                 <div class = "content">
                    <h3><br><p>Greetings and Welcome to ROYAL CASINO, an online platform giving 
                        the Best Casino Games Experience with promotions, cash prize and 
                        entertainment.ROYAL CASINO is fully owned and operated by ROYAL
                         CASINO Gaming Private Limited. The re-branding was a recognition 
                         of the enormous popularity of Casino Games in India.ROYAL CASINO 
                         website is managed by a professional management team with several 
                         years of experience in the online games industry.</h3></p><br>



                    
                      <br> <h2>Safe And Fair Online Games:</h2> 

                       <h3> <p>One of the concerns in online games is the guarantee of fair gameplay. 
                        To assure the integrity of our Casino games, the trusted Random Number 
                        Generator (RNG) is always used to determine the number that are given. 
                        In each game, RNG is utilized to ensure compliance with all required 
                        standards.Our games are available for both free and cash prizes.Don’t 
                        wait any further. Join India’s largest Casino Games website and play 
                        the game that is thrilling, refreshing and rewarding all at the same 
                        time.</p> </h3> <br>



                    
                      <br>  <h2>Cash Tournaments:</h2> 

                      <h3> <p>These are the games with cash prizes. Players can purchase a game seat 
                        by putting forth an entry fee, which could be different for different 
                        games. We retain a small fraction of the total entry fee pool as our 
                        service charge and the remaining is distributed as cash prizes among 
                        a pre-specified number of our top players (typically 25%). 
                        In just a short span of time, Casino Games  has evolved as India"s fast 
                        growing cash games Platform. Offering best in class gaming experience with 
                        complete digital safety, ROYAL CASINO  has become the first choice of millions 
                        of casino players across the country.</p> </h3> <br>



                      <br>  <h2>What Is ROYAL CASINO All About:</h2>

                     <h3> <p>ROYAL CASINO is the ultimate Best Casino Games Experience , that offers 
                          100% legal and safe gameplay right on your mobile and laptops. Once you 
                          register/login with ROYAL CASINO , you enter the world where challenge 
                          and thrill are not just about a game, but a way of life! There is endless
                          opportunity and the stronger are your skills with the game, the bigger
                          are the rewards.</p> </h3> <br>
                </div>
                        <div class="button">
                            <a href="Contactus.html">Contact Us</a>
                        </div>  
                    </div> 
                      <div class="social">
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>   
                      </div>
                    </div>
                    <div class="image-section">
                    <img src="">
                    </div>
                </div>
           </div> 
            <script src="scripts/userProfile.js">
            </script>
            <script>
                 let user=user_creation("<?php echo $_SESSION['username'];?>")
            </script>   
</body>
</html>