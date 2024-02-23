<?php include('header.php'); ?>

<form action="" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" name="email"  class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
<div class="mb-3">
<a href="register.php" class="btn btn-primary " tabindex="-1" role="button" aria-disabled="true">Register</a>
</div>
  <input type="submit" class="btn btn-primary" value="Submit">
</form>
<?php 
if ($_SERVER['REQUEST_METHOD']=="POST"){
  $email=$_POST['email'];
  $password=$_POST['password']
  $chk=$conn->query(Select * from tbl_register where email='$email' and password='$password');
  if($chk){
    echo"LOGIN SUCSESS";
  }
  else{
    echo"failed";
  }

}
</body>
</html>
