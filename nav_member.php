<nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Cam FOR U</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index_member.php">Home <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled">Wellcome :</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="#"><?php echo $User; ?></a>
      </li>
        <a class="nav-link enabled" href="show_shopping_page.php">Cart</a>
      </li>
      <li class="nav-item">
        <a class="nav-link enabled" href="logout.php">Logout</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action="search_nav_page_member.php">
      <input  class="form-control mr-sm-2" method="GET" name="keyword" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
