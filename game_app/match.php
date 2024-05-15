<?
    // match logic
    if(empty($_GET) && empty($_POST)){
        // 1. req -> no data ---> new match
        $new_match = true;
    } else{
        // 2. req => match_id -->existing match
        $new_match = false;
    };




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEW MATCH</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

<table class="match-table">
    <tr>
        <td colspan="2">NEW MATCH</td>
    </tr>
    <tr>
        <td><h2 >Player 1</h2></td>
        <td><h2 >Player 2</h2></td>
    </tr>
    <tr>
        <td>
            <form action="/login-action.php" method="POST">
                <input name="username" type="text" placeholder="username" >
                <input name="password" type="password" placeholder="password">
                <p>no acount ? <a href="/create-account.php">create one</a></p>
                <button>ENTER</button>
            </form>
        </td>
        <td>
            <form action="/login-action.php" method="POST">
                <input name="username" type="text" placeholder="username" >
                <input name="password" type="password" placeholder="password">
                <p>no acount ? <a href="/create-account.php">create one</a></p>
                <button>ENTER</button>
            </form>
        </td>
    </tr>
</table>
    
</body>
</html>