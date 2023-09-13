<div class="sidebar">
  <a class="logo-details" href="<?php echo BASE_URL?>/login/dashboard">
  <i class='bx bx-camera-movie'></i>
    <span class="logo_name">CineMax</span>
  </a>
  <ul class="nav-links">
    <li>
      <a href="<?php echo BASE_URL?>/login/dashboard" class="<?php if($_GET["url"] == "login/dashboard") {echo "active";} ?>">
        <i class="bx bx-grid-alt"></i>
        <span class="links_name">Dashboard</span>
      </a>
    </li>
    <li>
      <a href="<?php echo BASE_URL?>/movie" class=" <?php if($_GET["url"] == "movie") {echo "active";} ?>">
        <i class="bx bx-film"></i>
        <span class="links_name">Movie</span>
      </a>
    </li>
    <li>
      <a href="<?php echo BASE_URL?>/showtime" class=" <?php if($_GET["url"] == "showtime") {echo "active";} ?>">
      <i class='bx bx-movie-play'></i>
        <span class="links_name">Showtime</span>
      </a>
    </li>
    <!-- <li>
      <a href="<?php echo BASE_URL?>/room" class=" <?php if($_GET["url"] == "room") {echo "active";} ?>">
        <i class='bx bx-home-smile'></i>
        <span class="links_name">Room</span>
      </a>
    </li> -->
    <li>
      <a href="<?php echo BASE_URL?>/order" class=" <?php if($_GET["url"] == "order") {echo "active";} ?>">
        <i class="bx bx-cart"></i>
        <span class="links_name">Order</span>
      </a>
    </li>
    
    <li class="log_out">
      <a href="<?php echo BASE_URL?>/login/logout">
        <i class="bx bx-log-out"></i>
        <span class="links_name">Log out</span>
      </a>
    </li>
    
  </ul>
  
</div>
<section class="home-section">
  <nav>
    <div class="sidebar-button">
      <i class="bx bx-menu sidebarBtn"></i>
      <span class="dashboard">Dashboard</span>
    </div>
    <div class="search-box">
      <input type="text" placeholder="Search..." />
      <i class="bx bx-search"></i>
    </div>
    <div class="profile-details">
      <img src="images/profile.jpg" alt="" />
      <span class="admin_name">Thịnh Trần</span>
      <i class="bx bx-chevron-down"></i>
    </div>
  </nav>