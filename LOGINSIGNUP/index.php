<?php
session_start();
if(!isset($_SESSION['user_id'])){
    ?>
    <script>
        window.location.assign('login.php');
    </script>
    <?php
}
else{
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <h1>Hello <?php echo($_SESSION['username']); ?></h1>
    <a href="logout.php">LOGOUT</a>
    </div>
</body>
</html>
<?php
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>