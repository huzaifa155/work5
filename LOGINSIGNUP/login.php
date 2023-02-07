<?php
include('config.php');
if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];

$login ="SELECT * FROM `users` WHERE `user_email` = '$email' AND `user_password` = '$password'";
$result = $conn->query($login);
$row = $result->fetch_assoc();

if($row['user_email'] == $_POST['email']  and $row['user_password'] == $_POST['password']){

  SESSION_start();
  $_SESSION["user_id"] = $row ['user_id'];
  $_SESSION["username"] = $row ['user_name'];

  ?>
  <script>
      window.location.assign('index.php');
  </script>
  <?php
   
}else{
    ?>
    <script>
        window.alert("Check Your Email & Password, Or Try Signing up");
        window.location.assign('login.php');
    </script>
    <?php
}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css\style1.css">

    <!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.1.0/mdb.min.js"
></script>
</head>
<body>
    

<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
  <style>

  </style>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          The best offer <br />
          <span style="color: hsl(218, 81%, 75%)">for your business</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Temporibus, expedita iusto veniam atque, magni tempora mollitia
          dolorum consequatur nulla, neque debitis eos reprehenderit quasi
          ab ipsum nisi dolorem modi. Quos?
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

        <div class="card bg-glass">
          <div class="card-body px-4 py-5 px-md-5">
          <form action="login.php" method="POST">

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name = "email"  class="form-control" />
                <label class="form-label" >Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password"  class="form-control" />
                <label class="form-label" >Password</label>
              </div>

              

              <!-- Submit button -->
              <button type="submit" name ="submit" class="btn btn-primary btn-block mb-4">
                LOGIN
              </button>

              
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
</body>
</html>