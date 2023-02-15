<?php include 'partials/_header.php'; ?>
<?php session_start(); ?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  
    <?php if (isset($_SESSION['logged_in'])): ?>
      <a href=""> 
        Hello <?= $_SESSION['user_name'] ?>
      </a>

      <button type="button" class="btn btn-secondary" data-toggle="modal">
        Sign Out
      </button>

    <?php else: ?>

    <a href="/login"> 
      <button type="button" class="btn btn-primary" data-toggle="modal">
        Log In
      </button>
    </a>

    <?php endif; ?>
    
  </div>
</nav>

<? include 'partials/_footer.php'; ?>