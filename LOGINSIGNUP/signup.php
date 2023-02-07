<?php
include('config.php');
if(isset($_POST['submit'])){
  $user_name = $_POST['name'];
  $user_email = $_POST['email'];
  $user_password = $_POST['password'];


  $emailcheck = "SELECT * FROM users WHERE `user_email` = '$user_email'";
  $check  = $conn->query($emailcheck);
  $count  =mysqli_num_rows($check);

  if($count > 0){
    ?>
        <script>
          window.alert("User already exist");
          window.location.assign('login.php');
        </script>
    <?php
  }
  else{
    
  $insert = "INSERT INTO `users`(`user_name`, `user_email`, `user_password`) VALUES 
  ('$user_name','$user_email','$user_password')";
  $result = $conn->query($insert);

  if($result == true ){
      ?>
      <script>
          window.alert("Successfully To Signup");
          window.location.assign('login.php');
      </script>
      <?php
  }else{
      ?>
      <script>
          window.alert("Failed To Signup");
          window.location.assign('signup.php');
      </script>
      <?php
  }
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
<link rel="stylesheet" href="css/style.css">
</head>
<body>
   
<!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">


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
            <form action="signup.php" method="POST">
            
            
            <div class="form-outline mb-4">
                <input name="name" type="text"  class="form-control" />
                <label class="form-label" for="form3Example3">Name</label>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input name="email" type="email"  class="form-control" />
                <label class="form-label" for="form3Example3">Email address</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input name="password" type="password"  class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>



              <!-- Submit button -->
              <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
                
                Sign up
              </button>
            
              <!-- Register buttons -->
              
              </div>
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