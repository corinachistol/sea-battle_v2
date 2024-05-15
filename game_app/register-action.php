<?
    require_once 'lib.php';
    
    // 1. obtain form data
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $existing_users = load_users() ;
    // var_dump($existing_users);

    $exists_user = array_filter($existing_users, function ($user) {
        return $user['username'] ==  $_POST['username'] ;
    });
    // var_dump($exists_user);


    // 2. check password confirmation
    if($_SERVER['REQUEST_METHOD'] === "POST"){

        //HW1: check if the username is not free -redirect with message / else check the following params
        if(!empty($exists_user)) {
             header("Location: /create-account.php?message=". urlencode("This Username already exists!"));

            //password do not match
        } else if (empty($exists_user) && $password != $password_confirm) {
            header("Location: /create-account.php?message=". urlencode("Password & Confirmation password do not match!"));

            //HW2: check if the username has at least 3 symbols
            //HW3: check if the password has at least 3 symbols
        } else if (empty($exists_user) && (strlen($username) <= 3 || strlen($password) <= 3)) {
            header("Location: /create-account.php?message=". urlencode("Username and password cannot be shorter than 3 characters!"));

            //everything ok,save the user
        } else{
            $existing_users[] = [
            "username" => $username,
            "password" => $password,
            ];
            save_users($existing_users);

        }
         

    };

 

       

    // if($password != $password_confirm) {
    //     header("Location: /create-account.php?message=". urlencode("password & confirmation do not match!"));

    // } else{
    //     // 3. save user data

    //     //HW1: check if the username is free / if not -redirect with message
    //     //HW2: check if the username has at least 3 symbols
    //     //HW3: check if the password has at least 3 symbols
    //     //TODO will use regex
    //     $existing_users = load_users();
    //     $existing_users[] = [
    //         "username" => $username,
    //         "password" => $password,
    //     ];
    //     save_users($existing_users);
    // }





  
    


?>