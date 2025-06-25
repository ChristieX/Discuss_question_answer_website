<div class="container">
    <h1 class="text-center">Login</h1>
    <form action="./server/requests.php" method="post">
        <div class="mb-3 col-6 offset-3">
            <label for="username" class="form-label">User Name</label>
            <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <label for="password" name="password" class="form-label">password</label>
            <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <button type="submit" name="login" class="btn btn-primary">Login</button>
        </div>
    </form>
</div>