<?php include('template/header.php');?>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BelajarBarengAzmi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php?page=home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=event">Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=kategori">Kategpri</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<?php
if(isset($_GET["page"])){
  $page = $_GET["page"];
  switch($page){
    case 'home':
      include 'home.php';
      break;
    case 'about':
      include 'about.php';
      break;
    case 'kategori':
      include 'kategori.php';
      break;
    case 'event':
      include 'event.php';
      break;
    default:
    include 'home.php';
    break;
  }
}else {
  include 'home.php';
}









?>

   


  
<?php include('template/footer.php') ;?>