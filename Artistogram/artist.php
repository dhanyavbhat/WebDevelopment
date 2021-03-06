<?php
session_start();
$username=$_SESSION['username'];

// initializing variables
$cate = "";
$address    = "";
$discript    = "";
$errors=array();
//cooect to the database
$db = mysqli_connect('localhost', 'root', '', 'artistogram1');

if (isset($_POST['reg_user'])) {  
$cate = mysqli_real_escape_string($db, $_POST['cate']);
$address = mysqli_real_escape_string($db, $_POST['address']);
$discript = mysqli_real_escape_string($db, $_POST['discript']);

// form validation: ensure that the form is correctly filled ...
// by adding (array_push()) corresponding error unto $errors array
if (empty($cate)) { array_push($errors, "Category is required"); }
if (empty($address)) { array_push($errors, "Address is required"); }
if (empty($discript)) { array_push($errors, "Discription are required"); }
// first check the database to make sure 
// a user does not already exist with the same username and/or email
if (count($errors) == 0) 
{//encrypt the password before saving in the database
  $username=$_SESSION['username'];
  $query = "INSERT INTO 'artist'('aid','cate','address','discript','username') VALUES(NULL,'$cate', '$address','$discript','$username');";
  mysqli_query($db, $query);
  $_SESSION['success'] = "Profile Successfully added ";
  header('location: home1.php');
}
}
?>

<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Artist details</title>
<style>
  .header{
	  padding-top:80px;
  }
  .nav-item{
    float: right;
    }
  
    nav{
    background-color: black;
    }

  </style>
</head>
<body >
<div class="bg-img offset-md-3">
  <form method="post" action="artist.php" class="container">
    <h2>Artist Details</h2><br>
    <div class="form-group row">
        <label for="cate" class="col-md-2 col-form-label"><b>Categories:</b></label>
          <div class="col-md-5">
          <select type="text" id="category" name="cate" class="select form-control" value="<?php echo $category; ?>">
		
        <option id="Dancer" value="User">Dancer</option>
        <option id="Singer" value="Artist">Singer</option>
        <option id="Instrument" value="Organizer">Instrument</option>
      </select>
            
          </div>
        </div>
    <div class="form-group row">
    <label for="addr" class="col-md-2 col-form-label"><b>Address:</b></label>
        <div class="col-md-5">
            <textarea class="form-control" placeholder="Enter Address" name="address" rows="4"  required></textarea>
        </div>
    </div>
    
    

    <div class="form-group row">
    <label for="textarea" class="col-md-2 col-form-label"><b>Discription:</b></label>
      <div class="col-md-5">
        <textarea class="form-control" placeholder="Enter Discription" name="discript" rows="4"  required></textarea>
      </div>
    </div>  
    <div class="form-group row">
    <label for="header" class="col-md-2 col-form-label "><b>  User Name:</b></label>
        <div class="col-md-5">
    	<p><?php echo $username; ?></p>
        </div>
    </div>
    <div class="form-group row">
        <div class="offset-md-2 col-md-10">
            <button type="submit" class="btn btn-success button" name="reg_user" >Upload</button>
        </div>
    </div>
  
  </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>