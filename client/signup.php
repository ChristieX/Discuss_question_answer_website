<div class="container">
    <h1 class="text-center">Signup</h1>
    <form action="/Discuss/server/requests.php" method="post">
        <div class="mb-3 col-6 offset-3">
            <label for="username" class="form-label">User Name</label>
            <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <label for="" class="form-label">email</label>
            <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <label for="password" class="form-label">password</label>
            <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
        </div>
        <div class="mb-3 col-6 offset-sm-3">
            <button type="submit" name="signup" class="btn btn-primary">Signup</button>
        </div>
    </form>
</div>