<?php
session_start();
include("../common/db.php");
if (isset($_POST['signup'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $user = $conn->prepare("Insert into `users`
    (`username`,`email`,`password`)
    values ('$username','$email','$password');
    ");
    $result = $user->execute();
    if ($result) {
        $_SESSION["user"] = ["user_id" => $conn->insert_id, "username" => $username, "email" => $email];
        header("location: /discuss");
    } else {
        echo "No new user registered";
    }
} else if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    echo $username;
    echo $password;

    $query = "Select * from users where username='$username' and password='$password'";
    $result = $conn->query($query);
    if ($result->num_rows >= 1) {
        echo $result->num_rows;
        foreach ($result as $row) {
            $email = $row['email'];
            $user_id = $row['id'];
        }
        $_SESSION["user"] = ["user_id"=>$user_id ,"username" => $username, "email" => $email];
        // echo $_SESSION["user"]["user_id"];
        header("location: /discuss");
    } else {
        echo "No new user registered";
    }
} else if (isset($_GET['logout'])) {
    session_unset();
    header("location: /discuss");
}