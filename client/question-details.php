<div class="container">
    <h1 class="heading">Question</h1>
    <?php
        include(__DIR__ . "/../common/db.php");
        $query = "select * from question where id =$qid";
        $result = $conn->query($query);
        $row=$result->fetch_assoc();
        echo "<h4>".$row['title']."</h4>";
        echo "<p>".$row['description']."</p>";
        include('answers.php');
    ?>
    <form action="/Discuss/server/request_questions.php" method="post">
        <input type="hidden" name="question_id" value="<?php echo $qid ?>">
        <textarea name="answer" class="form-control w-75" placeholder="your answer..."></textarea>
        <button class="btn btn-primary my-3" name="submit">Write your answer</button>
    </form>
</div>