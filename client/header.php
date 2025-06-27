<nav class="navbar navbar-expand-xl navbar-light bg-light custom-navbar">
  <div class="container">
    <a class="navbar-brand" href="./">
      <img src="./public/images/Logo.png" alt="Logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <div class="container-fluid d-flex flex-column flex-xl-row align-items-start align-items-xl-center justify-content-between">
        <ul class="navbar-nav d-flex align-items-xl-center justify-content-between gap-2">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?latest=true">Latest Question</a>
          </li>
          <?php
          if (isset($_SESSION['user']['username'])) { ?>
  
            <li class="nav-item">
              <a class="nav-link" href="?ask=true">Ask question</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="?u-id=<?php echo $_SESSION['user']['user_id']; ?>">My question</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="./server/requests.php?logout=true">Logout</a>
            </li>
          <?php } else { ?>
            <li class="nav-item">
              <a class="nav-link" href="?login=true">Login</a>
            </li>
            <li class="nav-item">
              <a class=" btn btn-primary nav-link border rounded-pill  text-white fw-bold p-2" href="?signup=true">Join for free</a>
            </li>
          <?php } ?>
  
  
        </ul>
        <form class="d-flex mt-2 " action="" >
        <input class="form-control me-2" name="search" type="search" placeholder="Search Question" aria-label="Search">
        <button class="btn btn-outline-primary" type="submit">Search</button>
      </form>
      </div>
    </div>
  </div>
</nav>