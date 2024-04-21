<?php
require_once "partial/connect.php";
require_once "partial/boot.php";
  if($_SERVER['REQUEST_METHOD']=="POST"){
    $Uname= $_POST["Username"];
    $ename=$_POST["Email"];
    $pname =$_POST["password"];
    $query="INSERT INTO `user_t` (`Username`, `Email`, `password`) VALUES ('$Uname', '$ename', '$pname')";
    $result=mysqli_query($conn,$query);
    if(!$result){
      echo mysqli_error($conn);
    }
    else
    {
      header("Location:index.php");
    }
  }
?>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Sigh-in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sigh-in
      </div>
      <form class="px-4 py-3" method="post" action="">
      <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">UserName</label>
          <input type="text" class="form-control" name= "Username" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" name="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" Name="password" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<!-- Modal 2 -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel2">Log-in</h1>
      </div>
      <div class="modal-body">
        Log-in
      </div>
      <form class="px-4 py-3" method="post" action="Dashbord.php"> <!-- Added padding classes for padding -->
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>
