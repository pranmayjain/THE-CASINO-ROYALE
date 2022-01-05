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
    <link rel="stylesheet" href="Contactus.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

 
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


    <br>
    <br>
    <div class="container">
         
         <h1> Contact US </h1>  
    
      <p>We would love to respond to your queries & help you succeed. Feel free to get in touch with us.</p>
           <div class="contact-box">
               <div class="contact-left">
                    <h3>Send your query</h3>
                    <form>

                        <div class="input-row">
                              <div class="input-group">
                                  <label>Name</label>
                                  <input type="text"   placeholder="Your name">
                              </div>
                              <div class="input-group">
                                <label>Phone</label>
                                <input type="text"   placeholder="+91 XXXXXXXXXX">
                            </div>


                        </div>

                        <div class="input-row">
                            <div class="input-group">
                                <label>Email</label>
                                <input type="email"   
                                placeholder="youremail@mail.com">
                            </div>
                            <div class="input-group">
                              <label>Issue</label>
                              <input type="text"   placeholder="Right your query">
                          </div>


                      </div>

                      <label>Message</label>
                      <textarea rows="5" placeholder="Your Message"></textarea> 

                      <button type="submit">SEND</button>



                    </form>
                </div>
                <div class="contact-right">
                    <h3>Reach Us</h3>

                    <table>
                        <tr>
                            <td>Email</td>
                            <td>royalcasinocontactus@gmail.com</td>

                        </tr>

                        <tr>
                            <td>Phone</td>
                            <td>+91 9414303207 , +91 9784344988</td>
                            
                        </tr>

                        <tr>
                            <td>Address</td>
                            <td>NMIMS SHIRPUR, MAHARASHTRA</td>

                        </tr>
                    </table>
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