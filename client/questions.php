<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 mx-2">
            <h1 class="heading">Questions</h1>
            <?php
            include("./common/db.php");
            $uid = null;

            $baseQuery = "SELECT q.*, u.username 
              FROM question q 
              INNER JOIN users u ON q.user_id = u.id";

            $whereClause = "";

            if (isset($_GET['c-id'])) {
                $cid = $_GET['c-id'];
                $whereClause = " WHERE q.category_id = $cid";
            } else if (isset($_GET['u-id'])) {
                $uid = $_GET['u-id'];
                $whereClause = " WHERE q.user_id = $uid";
            } else if (isset($_GET['latest'])) {
                $whereClause = " ORDER BY q.id DESC";
            } else if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $whereClause = " WHERE q.title LIKE '%$search%'";
            }

            $query = $baseQuery . $whereClause;

            $result = $conn->query($query);

            if ($result && $result->num_rows > 0) {
                foreach ($result as $row) {
                    $username = $row['username'];
                    $title = $row['title'];
                    $id = $row['id'];

                    echo "<div class='row question-list'>
                <h6 class='username'>$username:</h6>
                <h4 class='d-flex justify-content-between'>
                    <a href='?q-id=$id' >$title</a>";
                    echo $uid ? "<a href='./server/request_questions.php?delete=$id'>Delete</a>" : "";
                    echo    "</h4>
              </div>";
                }
            } else {
                echo "<div class='row question-list'>
            <h4 class='text-muted'>No questions available.</h4>
          </div>";
            }

            ?>
        </div>
        <div class="col-lg-3 col-12">
            <?php include('category-list.php') ?>
        </div>
    </div>
</div>