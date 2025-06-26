<div>
    <h1>Categories</h1>
    <?php 
            include("./common/db.php");
            $query="select * from category";
            $result = $conn->query($query);
            foreach($result as $row){
                $name =  ucfirst($row['name']);
                $id = $row['id'];
                echo"<div class='row question-list'> <h4><a href='?c-id=$id' class=' text-decoration-none text-dark'>$name</a></h4></div>";
            }
            ?>
</div>