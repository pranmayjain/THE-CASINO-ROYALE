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
    <title>Slot Game</title>
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

    <div class="slot_machine">
        <h1 style="color: wheat;">SLOT MACHINE</h1>
        <div id="slot1"></div>
        <div id="slot2"></div>
        <div id="slot3"></div>
        <button id="slot_start" onclick="user.slots()">Play</button>
    </div>

    </div>
    <script src="scripts/userProfile.js"></script>
    <script src="scripts/userProfile.js">
    </script>
    <script>
        let user=user_creation("<?php echo $_SESSION['username'];?>")
    </script>
</body>

</html>