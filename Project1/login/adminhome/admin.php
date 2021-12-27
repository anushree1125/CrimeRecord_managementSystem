<?php
session_start();
if(!isset($_SESSION["username"])){
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin: 4px;
        justify-content: space-around;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
        }
        button{
      margin-top:14px;
      margin-bottom:14px;
      background-color:#3e9ed6;
      border:1px black;
      border-radius:6px;
      color:white;
      cursor:pointer;
      text-align:center;
      font-size:
    
    }
    

    button:hover{
      background-color:#1a73e8;
      color:white;
      transition:0.3s;
      
    }
    ,a{
        font-size:14px;
    }
    .image img{
      width:100%;
      border-top-right-radius:7px;
      border-top-left-radius:7px;
      
    }
    .title{
      text-align:center;
      padding:5px;
    }
    .description{
      padding:4px;
      text-align:center;
    }
    .cards{
      width:20%;
      background-color:rgb(218, 228, 240);
      border-radius:7px;
      display:inline-block;
      height:calc(100vh/3);
      margin-top:30px;
      float:center;
    }
    .nav{
        justify-content: right;
        display: flex;
        flex-direction: row;
        flex-wrap: wrap;
    }


    </style>
</head>
<body>
    <h3>Admin homepage</h3>
        <div class="nav">
            <div class="">
            <input type="text" name="Search" placeholder="Search.." /><a method="POST" href="search.php">Search</a>
            </div>
    <div class="log">
    <a href="../logout.php" class="btn btn-primary" id="logout-btn">Logout</a>
    </div>
</div>
<div class="container">
  
  <div class="cards">

   <div class="image">
   </div>
   <div class="title">
     <h2>Dashboard</h2>
   </div>
   <div class="description">
   <p>View the total number of criminals, total police<br> and total category of crime.</p>
   <a href="dashboard.php"><button type="submit">Submit</button></a>
   </div>
  </div>
  <div class="cards">
   <div class="image">
   </div>
   <div class="title">
     <h2>Update</h2>
   </div>
   <div class="description">
   <p>Add new crime, update or delete existing crime records</p>
     <a href="update_crime.php"><button type="submit">Submit</button></a>
   </div>
  </div>
  <div class="cards">
   <div class="image">
   </div>
   <div class="title">
     <h2>Update user</h2>
   </div>
   <div class="description">
   <p>Add police or delete cop entries</p>
   <a href="update_user.php"><button type="submit">Submit</button></a>
   </div>
  </div>
  <div class="cards">
   <div class="image">
   </div>
   <div class="title">
     <h2>Your profile</h2>
   </div>
   <div class="description">
   <p>View the total number of criminals, total police<br> and total category of crime.</p>
     <button type="submit">Submit</button>
   </div>

  </div>
  </div>
  </body>
</html>

</body>
</html>
