
<?php
session_start();
require_once "partial/connect.php";
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $ename=$_POST["email"];
    $pname=$_POST["password"];
    
    // $query='SELECT * FROM `user_t` WHERE Email='."$ename".' && password=".'$pname'."';
    $query = 'SELECT * FROM `user_t` WHERE Email="' . $ename . '" AND password="' . $pname . '"';
    $resu=mysqli_query($conn,$query); 
    $reco=mysqli_fetch_assoc($resu);
    $num = mysqli_num_rows($resu);
   if($num!=1){
    header("Location:index.php");
   }
   else
   {
    $_SESSION["uname"]=$reco["Username"];
$uname=$_SESSION["uname"];
    $query2='SELECT * FROM `posts` WHERE Username="'.$uname.'"';
    $resu2=mysqli_query($conn,$query2); 

    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Blogger Hub</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Blogger Hub</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Welcome, '.$reco["Username"].'</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-5">
    <h2>Recent Blog Posts</h2>
    <div class="card">
        
            <!-- Loop through recent blog posts and display them here -->
            ';

            while($record=mysqli_fetch_assoc($resu2))
            {
                // print_r($record);
                echo '
                <div class="card-body">
                <div class="blog-post">
                <h3>'.$record["Title"].'</h3>
                <p>'.$record["post"].'</p>
                <a href="#" class="btn btn-primary">Read More</a>
                </div>
                </div>
                ';
            }

            echo '
            <!-- End of loop -->
        
    </div>

    <div class="mt-4">
        <a href="new_post.php" class="btn btn-success">Create New Post</a>
    </div>
</div>

<!-- Bootstrap JS (jQuery is required) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>';


   }
 



    
  }
?>
    