<?php
  $url = isset($_GET["url"]) ? $_GET["url"] : NULL;
    
  if ($url!=NULL) {
      $url = rtrim($url, "/");
      $url = explode("/", $url);
  } else {
      unset($url);
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400;500;600;700&display=swap');
  </style>
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/405.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/styles.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/nav.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/home.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/film.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/filmbyId.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/showTimess.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/bookings.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/cart.css" />
  <link rel="stylesheet" href="<?php echo BASE_URL ?>/public/css/footers.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" 
  />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <title>Document</title>
</head>

<body style="background-image: url(<?php echo BASE_URL ?>/public/image/bg.jpg);">
  <div id="root">
    <div class="content-wrapper">
      <header>
        <nav>
          <div class="nav">
            <div class="menu">
              <div class="menu-icon">
                <span class="fas fa-bars"></span>
              </div>
              <div class="logo"><a href="<?php echo BASE_URL ?>">CineMax</a></div>
              <div>
                <span><i class="fa-solid fa-camera-movie"></i></span>
              </div>

              <div class="nav-items">

                <li><a class="start-item <?php if( (!isset($url[0]) || $url[0] == "index") && $url[1] != "notfound" ) {echo "nav-active";} ?>" 
                  href="<?php echo BASE_URL ?>">Home
                </a></li>

                <li><a class="<?php if($url[0] == "film") {echo "nav-active";} ?>" 
                  href="<?php echo BASE_URL ?>/film">Movie
                </a></li>

                <li><a class="<?php if($url[0] == "suatchieu") {echo "nav-active";} ?>"
                  href="<?php echo BASE_URL ?>/suatchieu/catetime/1">Showtimes
                </a></li>

                <li>
                  <a class="end-item <?php if($url[0] == "booking" || $url[0] == "cart") {echo "nav-active";} ?>"
                    href="<?php echo BASE_URL ?>/booking">Booking
                  </a>
                </li>

              </div>
              <div class="search-icon">
                <span class="fas fa-search"></span>
              </div>
              <div class="cancel-icon">
                <span class="fas fa-times"></span>
              </div>
              <form action="">
                <input name="tukhoa" type="search" class="search-data" placeholder="Search..." required>
                <button name="timkiem" value="Tìm kiếm" type="submit" class="fas fa-search"></button>
              </form>
            </div>
          </div>

        </nav>
      </header>
      <!-- End header -->
      <main>
      
        <!-- End baner -->