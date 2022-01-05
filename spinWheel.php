<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>SPIN WHEEL</title>
    <link rel="stylesheet" href="project.css">
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
    <div class="spin_wheel">
            <h1 style="color: wheat;">SPIN THE WHEEL</h1>
            <div style="display: flex; justify-content: space-around; margin-right:250px;">
              <div class="spin_wheel_contain">
                <img src="game_assets/spin_wheel.png" id="wheel" class="rotate">
              </div>
              <div style="margin-top: 150px;">
                <img src="game_assets/arrow_red_new.png">
              </div>
              
            </div>

            <button onclick="user.spinWheel()">Spin</button>
        </div>
    </div>
    <script src="scripts/userProfile.js">
    </script>
    <script>
        let user=user_creation("<?php echo $_SESSION['username'];?>")
    </script>
</body>

</html>