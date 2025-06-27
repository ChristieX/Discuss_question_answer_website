<div class="container">
    <div class="row min-vh-75 d-flex align-items-center justify-conten-center">
        <div class="col-md-6 col-12 login-image object-fit-contain d-flex align-items-center justify-content-lg-end ">
            <!-- <div class=""> -->
            <img src="./public/images/Login.png" class=" w-md-75 w-100" alt="login image">
            <!-- </div> -->
        </div>
        <div class="col-md-6 col-12 ">
            <form action="./server/requests.php" method="post">
                <div class="login-form d-flex flex-column justify-content-between align-items-md-start align-items-center m-3 w-75">
                    <h1 class="align-self-center">Login</h1>
                    <?php if (isset($_GET['error']) && $_GET['error'] === 'no_users'): ?>
                        <div class="alert alert-danger text-center align-self-center" role="alert">
                            User does not exist.please create an account instead.
                        </div>
                    <?php endif; ?>
                    <div class="mb-3 w-100">
                        <label for="username" class="form-label">User Name</label>
                        <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="Enter username">
                    </div>
                    <div class="mb-3 w-100">
                        <label for="password" name="password" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" id="password" aria-describedby="password" placeholder="Enter password">
                    </div>
                    <div class="mb-3 w-100 text-center">
                        <button type="submit" name="login" class="btn btn-lg w-50 btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>