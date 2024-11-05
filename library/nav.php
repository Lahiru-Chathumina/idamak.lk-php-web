<nav class="navbar navbar-expand-lg navbar-dark bg-cl1">
  <div class="container">
    <a class="navbar-brand" href="../"><img src="../images/logo.png" style="height:50px;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <?php if(!isset($_SESSION["uid"])) { ?>
        <li class="nav-item">
          <a class="nav-link text-warning" aria-current="page" href="../user/">Advertiser Login</a>
        </li>
        <?php } ?>
        <?php if(isset($_SESSION["uid"])) { ?>
        <li class="nav-item">
          <a class="nav-link text-warning" aria-current="page" href="../user/logout.php">Logout</a>
        </li>
        <?php } ?>
      </ul>
      <form class="d-flex" action="">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
        <button class="btn btn-warning" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>