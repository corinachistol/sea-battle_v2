<?
    require_once 'lib.php';
    
    $username = $_POST['username'];
    $password = $_POST['password'];

    $users = load_users();

//    $found = user_exists($users, $username, $password);

    if(user_exists($users)){
        print("Welcome");
    }else{
        header("Location: /match.php");
    };



?>