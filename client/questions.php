<div class="container">
    <div class="row">
        <div class="col-8">
            <h1 class="heading">Questions</h1>
            <?php 
            include("./common/db.php");
            $uid = null;
            if(isset($_GET['c-id'])){
                $query="select * from question where category_id=$cid";
            }
            else if(isset($_GET['u-id'])){
                $uid = $_GET['u-id'];
                $query="select * from question where user_id=$uid";
            }
            else if(isset($_GET['latest'])){
                $query="select * from question order by id desc";
            }
            else if(isset($_GET['search'])){
                $query="select * from question where `title` like '%$search%'";
            }
            else{

                $query="select * from question";
            }
            $result = $conn->query($query);
            foreach($result as $row){
                $title =  $row['title'];
                $id = $row['id'];
                echo"<div class='row question-list'>
                <h4 class='d-flex justify-content-between'>
                <a href='?q-id=$id' class=' text-decoration-none text-dark'>$title</a>";
                echo $uid?"<a href='./server/request_questions.php?delete=$id'>Delete</a>":NULL;
                echo "</h4></div>";
            }
            ?>
        </div>
        <div class="col-4">
            <?php include('category-list.php') ?>
        </div>
    </div>
</div>