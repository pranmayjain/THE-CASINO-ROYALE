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
    <title>Casino Arena</title>
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

    <div class="left">
    </div>

    <div class="middle">
    </div>

    <div class="right">
    </div>

    <div class="play1">
        <a href="slot_game.php">
            <h2>Play Now &#9658;</h2>
        </a>
    </div>

    <div class="play2">
        <a href="spinWheel.php">
            <h2>Play Now &#9658;</h2>
        </a>

    </div>

    <div class="play3">
        <a href="guess_no.php">
            <h2>Play Now &#9658;</h2>
        </a>
    </div>

    <script src="scripts/userProfile.js">
    </script>
    <script>
        window.onload=user_creation("<?php echo $_SESSION['username'];?>")
    </script>
</body>

</html>