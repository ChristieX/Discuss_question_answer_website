<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Question</h1>
            <?php
                include(__DIR__ . "/../common/db.php");
                $query = "select * from question where id =$qid";
                $result = $conn->query($query);
                $row=$result->fetch_assoc();
                echo "<h4>".$row['title']."</h4>";
                echo "<p>".$row['description']."</p>";
                $categoryid = $row['category_id'];
                include('answers.php');
            ?>
            <form action="/Discuss/server/request_questions.php" method="post">
                <input type="hidden" name="question_id" value="<?php echo $qid ?>">
                <textarea name="answer" class="form-control w-75" placeholder="your answer..."></textarea>
                <button class="btn btn-primary my-3" name="submit">Write your answer</button>
            </form>
        </div>
        <div class="col-4">
            <?php 
            $categoryQuery = "select name from category where id = $categoryid";
            $categoryResult = $conn->query($categoryQuery);
            $categoryRow = $categoryResult->fetch_assoc();
            echo "<h1>".ucfirst($categoryRow['name'])."</h1>";
            $query = "select * from question where category_id =$categoryid and id!=$qid";
            $result = $conn->query($query);
            foreach($result as $row){
                $title =  $row['title'];
                $id = $row['id'];
                echo"<div class='row question-list'> <h4><a href='?q-id=$id' class=' text-decoration-none text-dark'>$title</a></h4></div>";
            }
            ?>
        </div>
    </div>
</div>