
<? require_once 'lib.php'?>
<?
    $message = get_message($_GET);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE ACCOUNT | SEA BATTLE GAME</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<div class="container">
   <h1>CREATE ACCOUNT | SEA BATTLE</h1>
    <?if($message) {?>
        <p class="error"><?=$message?></p>
    <?}?>
   <form action="/register-action.php" method="POST">
        <input name="username" type="text" placeholder="username" >
        <input name="password" type="password" placeholder="password">
        <input name="password_confirm" type="password" placeholder="confirm password">
        <!-- <p>do you have an account? <a href="/login-action.php">Log In</a></p> -->
        <button>REGISTER</button>
    </form>
</div>
    
</body>
</html>


