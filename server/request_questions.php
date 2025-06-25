<?php
session_start();
include("../common/db.php");
if(isset($_POST['ask'])){
     $title = $_POST['title'];
     $description = $_POST['description'];
     $category_id = $_POST['category'];
     $user_id = $_SESSION['user']['user_id'];
     $question = $conn->prepare("Insert into `question`
    (`title`,`description`,`category_id`,`user_id`)
    values ('$title','$description','$category_id','$user_id');
    ");
    $result = $question->execute();
    if ($result) {
        header("location: /discuss");
    } else {
        echo "Question not added to website";
    }
}else if(isset($_POST["answer"])){
    print_r($_POST);
    $answer = $_POST['answer'];
     $question_id = $_POST['question_id'];
     $user_id = $_SESSION['user']['user_id'];
     $answer = $conn->prepare("Insert into `answers`
    (`answer`,`question_id`,`user_id`)
    values ('$answer','$question_id','$user_id');
    ");
    $result = $answer->execute();
    if ($result) {
        header("location: /discuss?q-id=$question_id");
    } else {
        echo "Answer not submitted";
    }
}