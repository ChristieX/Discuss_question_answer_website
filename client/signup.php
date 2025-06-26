<!-- <div class="container">
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
</div> -->

<div class="container">
    <div class="row min-vh-75 d-flex align-items-center justify-conten-center">
        <div class="col-6 login-image object-fit-contain d-flex align-items-center justify-content-end ">
            <!-- <div class=""> -->
            <img src="./public/images/signup.png" class="w-75" alt="login image">
            <!-- </div> -->
        </div>
        <div class="col-6  ">
            <form action="/Discuss/server/requests.php" method="post">
                <div class="login-form d-flex flex-column justify-content-between align-items-start m-3 w-75">
                    <h1 class="align-self-center">Sign up</h1>
                    <div class="mb-3 w-100">
                        <label for="username" class="form-label">User Name</label>
                        <input name="username" type="text" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="" class="form-label">email</label>
                        <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Enter email">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="password" class="form-label">password</label>
            <input name="password" type="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
                    </div>
                    <div class="mb-3 w-100 text-center">
                        <button type="submit" name="signup" class=" btn btn-lg w-50 btn-primary">Signup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>