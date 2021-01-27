<?php
session_start();
$username=$_SESSION['username'];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/category.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category</title>
    <style>
        .dance {
            padding-top: 28px;
        }
        .music{
            padding-top: 30px;
        }
    </style>
</head>
<body>
    <div class="bg-img offset-md-1 ">
        <nav class="navbar navbar-dark navbar-expand-sm  fixed-top">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
               <a class="navbar-brand" href="#">Artistogram</a>
               <div class="collapse navbar-collapse" id="Navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="./home1.php" >Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="./category1.php">Artist</a></li>
                        <li class="nav-item"><a class="nav-link" href="./events.php">New Event</a></li>
                        <li class="nav-item"><a class="nav-link" href="./about1.php">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="index.php?logout='1'">Logout</a></li>
                        <li class="nav-item"><p style="color:white;"><?php echo $username;?></p></li>
                    </ul>
                </div>            
            </div>
        </nav>
        <div class="container">
        <div class="row">
            <div class="column col-md-4">
                <a href="fetdan1.php">
                <img src="images/dance.jpg" class="dance" alt="Dance" style="width:100%"></a>
                
                <h4 class="offset-5">DANCE</h4>
            </div>
            
            <div class="column col-md-2"></div>
            <div class="column col-md-4">
                <a href="fetmus1.php">
                <img src="images/music.jpg" alt="Music" class="music" style="width:100%"></a>
                <h4 class="offset-5">MUSIC</h4>
            </div>
        </div> 
        <div class="row">
            <div class="col-md-3"></div>
                <div class="column col-md-4">
                    <a href="fetinst1.php">
                    <img src="images/instruments.jpg" alt="Dance" style="width:100%"></a>
                    <h4 class="offset-4 offset-md-3">INSTRUMENTS</h4>
                </div>
            
        </div>   
        
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>