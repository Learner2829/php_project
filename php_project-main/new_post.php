<?php
session_start();
if(isset($_SESSION["uname"])){
    $uname=$_SESSION["uname"];
   echo '
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>New Blog Post - Blogger Hub</title>
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
                       <a class="nav-link" href="#">Welcome,'. $_SESSION["uname"] .'</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" href="logout.php">Logout</a>
                   </li>
               </ul>
           </div>
       </nav>
   
       <div class="container mt-5">
           <h2>Create New Blog Post</h2>
           <form action="save_post.php" method="post">
               <div class="form-group">
                   <label for="title">Title:</label>
                   <input type="text" class="form-control" id="title" name="title" required>
               </div>
               <div class="form-group">
                   <label for="content">Content:</label>
                   <textarea class="form-control" id="content" name="content" rows="6" required></textarea>
               </div>
               <button type="submit" class="btn btn-primary">Publish</button>
           </form>
       </div>
   
       <!-- Bootstrap JS (jQuery is required) -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   </body>
   </html>'; 
}
else
{
    header("location:index.php");
}


?>



