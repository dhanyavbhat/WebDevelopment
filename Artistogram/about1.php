<?php

session_start();
$username=$_SESSION['username'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <style>
    .nav-item{
    float: right;
    }
    nav{
    background-color: black;
    }
    .row{
        padding-top: 30px;
    }
    </style>
    
</head>
<body>
    <div class="bg-img offset-md-2 ">
        <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <a class="navbar-brand" href="#">Artistogram</a>
               <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="./home1.php" >Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="./category1.php">Artist</a></li>
                        <li class="nav-item"><a class="nav-link" href="./events.php">New Event</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./about1.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?logout='1'">Logout</a></li>
                        <li class="nav-item"><p style="color:white;"><?php echo $username;?></p></li>
                    </ul>
                </div>            
            </div>
        </nav>
        <div class="container">
        <div class="row">
            <div class="column col-md-4 offset-md-3">
                <a href=#>
                <img src="images/logo.jpg" class="img-rounded" alt="logo" style="width:100%"></a>
            </div>
     <p class="col-md-8 offset-md-4" style="font-size: 30px;"><b>ABOUT US</b></p>
    <p class="col-md-10"><b>Artistogram is one of a kind which is dedicated to bring all the artists, organizers and the spectators into one platform providing all the details of the registered artists and also the events that are posted on this platform.
        This application helps the user to view the details of upcomming events or view or contact artists.
        The artists can also add events to this application as well by contacting outher artists.
        The organizers are provided with a feature to add events which provides publicity and can also contact artists. 
        It also makes it easier for all the participents (Spectator, Artist and Organizer) to view, update and connect.
        Also providing a good opportunity for artists to market them and showcase their tallent.</b></p>
        
        <p class="col-md-10"><b> Our Team <br> Dhanya V Bhat <br> Karthik Pranav N <br> Navya P <br></b>
    </p></div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>     