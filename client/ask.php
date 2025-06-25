<div class="container">
    <h1 class="text-center">Ask a question</h1>
    <form action="./server/request_questions.php" method="post">
        <div class="mb-3 col-6 offset-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="username" placeholder="Enter username">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <label for="description" name="description" class="form-label">description</label>
            <textarea type="text" name="description" class="form-control" id="description" aria-describedby="description" placeholder="Enter description"></textarea>
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <label for="category" name="category" class="form-label">category</label>
            <select name="category" id="category" class="form-control">
                <option value="">Select a Category</option>
                <?php 
                include("./common/db.php");
                $query="select * from category";
                $result=$conn->query($query);
                foreach($result as $row){
                    $name = ucfirst($row['name']);
                    $id = $row['id'];
                    echo "<option value=$id>$name</option>";
                } 
                ?>
            </select>
        </div>
        
        <div class="mb-3 col-6 offset-sm-3">
            <button type="submit" name="ask" class="btn btn-primary">Ask Question</button>
        </div>
    </form>
</div>