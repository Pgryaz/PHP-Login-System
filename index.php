
<?php 
        // Allow Config
        define('__CONFIG__', true);
        // Require config
        require_once "inc/config.php"; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="follow">
    <title>Document</title>

    <base href="/" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.16.13/css/uikit.min.css" integrity="sha512-/oP0MYgXFK7UrJVeacbLgalOhKcHQwCD3Tu3DgCE6x8cLYQDQF8WgSn3O746sN8qw9UQRj7ulDd6VxNR5zNdOQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

<div class="uk-section uk-container ">
    <?php 
        echo "Hello, today is";
       echo date(" l");
       ?>
       <p>
        <a href="/login.php">Login</a>
        <a href="/register.php">Register</a>
</div>

<?php require_once "inc/footer.php"; ?>
    
</body>
</html>