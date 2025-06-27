<div class="container">
    <h5>Answers:</h5>
    <?php 
     $query = "select a.*,u.username from answers a INNER JOIN users u ON a.user_id = u.id where a.question_id =$qid";
    $result = $conn->query($query);
    foreach($result as $row){
        $username = $row['username'];
         $answer=$row['answer'];
         echo "<div class='answer-wrapper'>
         <h6 class='username'>$username :</h6>
         <p class='ps-2'>$answer</p>
         </div>";
    }
    ?>
</div>