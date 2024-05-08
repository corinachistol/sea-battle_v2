<?
    require_once 'lib.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = load_users();

    $found = user_exists($users);
    $found = array_values($found);


    if(!empty($found)){
        print("Welcome {$found[0]['username']} ");
    }else{
        header("Location: /match.php");
    };



?>