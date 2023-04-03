
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
    <div class="uk-grid uk-child-width-1-3@s uk-child-width-1-1" uk-grid>
    <form class="uk-form-stacked js-login">

    <h2>Login</h2>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="email" required="required" placeholder="email@email.com">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-stacked-text" type="password" required="required" placeholder="Your Password">
        </div>
    </div>
    <div class="uk-margin">
        <button class="uk-button uk-button-default" type="submit">Login</button>
    </div>

   

</form>
    </div>
</div>

<?php require_once "inc/footer.php"; ?>
    
</body>
</html>