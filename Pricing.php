<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Games Pricing</title>
    <link rel="stylesheet" href="Pricing.css">
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

    <div class="wrapper">
                <div class="single-price">
                    <h1>SLOT MACHINE</h1>
                    <div class = "price">
                          <h2>Rs 50</h2>
                    </div>  
                           <div class="deals"></div> 
                         <h4>Slots have been popular in casinos for many years.</h4>
                         <h4>Playing a slot machine is not difficult.</h4>
                         <h4>There are a number of general rules that apply to all slot machines.</h4> 
                         <h4>Furthermore, you can also employ a strategy to increase your chances of winning.</h4> 
                         <a href="slot_game.php">select</a>
                </div>

         
         </div>    
          

                        <div class="single-price">
                            <h1>SPIN THE WHEEL</h1>
                                <div class = "price">
                                  <h2>Rs 100</h2>
                                </div>  
                                      <div class="deals"></div> 
                                           <h4>Spin fortune wheels have been popular in casinos for many years.</h4>
                                           <h4>Playing a spin fortune wheel is not difficult.</h4>
                                           <h4>These rules imply that you should focus on maintaining control over the wheel. </h4> 
                                           <h4>Furthermore, you can also employ a strategy to increase your chances of winning.</h4> 
                                           <a href="spinWheel.php">select</a>
          
                        </div>

       

    

                              <div class="single-price">
                                  <h1>GUESS THE NUMBER</h1>
                                    <div class = "price">
                                        <h2>Rs 75</h2>
                                    </div>  
                                           <div class="deals"></div> 
                                              <h4>Guess The No. have been popular in casinos for many years.</h4>
                                              <h4> Playing this game is not difficult.</h4>
                                              <h4>There are a number of general rules that apply to this game.</h4> 
                                              <h4>Furthermore, you can also employ a strategy to increase your chances of winning.</h4> 
                                                   <a href="guess_no.php">select</a>
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