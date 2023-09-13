<div class="home-content">

  <div class="add-boxes">
    <form action="<?php echo BASE_URL ?>/movie/insertmovie" method="post" class="form-add">
      <div class="wrapper-add">
        <div class="item-add">
          <label for="title" class="label">Title</label>
          <input class="val-add" type="text" id="title" name="title" placeholder="Enter your title..." required>
        </div>
        <div class="item-add">
          <label for="image" class="label">Image</label>
          <input class="val-add" type="text" id="image" name="image" placeholder="Enter your image address..." required>
        </div>
        <div class="item-add">
          <label for="genre" class="label">Genre</label>
          <input class="val-add" type="text" id="genre" name="genre" placeholder="Mời nhập thể loại phim ..." required>
        </div>
        <div class="item-add">
          <label for="director" class="label">Director</label>
          <input class="val-add" type="text" id="director" name="director" placeholder="Mời nhập tên đạo diễn ..." required>
        </div>
        <div class="item-add">
          <label for="actor" class="label">Actor</label>
          <input class="val-add" type="text" id="actor" name="actor" placeholder="Mời nhập tên diễn viên ..." required>
        </div>
        <div class="item-add">
          <label for="reldate" class="label">Release Date</label>
          <input class="val-add" type="date" id="reldate" name="relDate" placeholder="Mời nhập ngày khởi chiếu ..." required>
        </div>
      </div>
      <button name="addMovie" type="submit">Add Movie</button>
    </form>
  </div>

  <div class="msg-boxes">
    <?php
    if (!empty($_GET['msg'])) {
      $msg = unserialize(urldecode($_GET['msg']));
      foreach ($msg as $key => $val) {
        echo $val;
      }
    }
    ?>
    <script>
      const msgElm = document.querySelector(".msg-boxes")
      if (msgElm.innerText !== "") {
        alert(msgElm.innerText)
      }
    </script>
  </div>

  <div class="info-boxes">
    <div class="info-box box">
      <div class="title">Phim</div>
      <div class="info-details">
        <table class="styled-table">
          <thead>
            <tr>
              <th>Id</th>
              <th>Title</th>
              <th>Image</th>
              <th>Genre</th>
              <th>Director</th>
              <th>Actor</th>
              <th>Release Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($movies_per_page as $key => $item) { ?>
              <form action="<?php echo BASE_URL ?>/movie/updatecategory" method="POST" enctype="multipart/form-data">
                <!-- enctype="multipart/form-data"  => unload image -->
                <tr>
                  <th>
                    <input name="idMovie" style=" text-align: center; width: 50px; background-color: transparent; border: none; " type="text" value="<?php echo $item['idmovie']; ?>" readonly>
                  </th>
                  <th>
                    <div class="info-item" style="width: 300px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>">
                        <span><?php echo $item['title']; ?></span>
                      </a>
                      <input name="titleEdit" type="text" placeholder="Enter new title..." required>
                    </div>

                  </th>
                  <th style="width: 150px">
                    <span class="info-item" style="width: 150px; gap: 10px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>">
                        <img style="width: 150px; height: 150px; object-fit: cover;" src="<?php echo $item['image']; ?>" alt="">
                      </a>
                      <input name="imageEdit" type="text" placeholder="Enter new image..." required>
                    </span>
                  </th>
                  <th>
                    <div class="info-item" style="width: 200px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>"><span><?php echo $item['genre']; ?></span></a>
                      <input name="genreEdit" type="text" placeholder="Enter new genre..." required>
                    </div>
                  </th>
                  <th>
                    <div class="info-item" style="width: 150px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>"><span><?php echo $item['director']; ?></span></a>
                      <input name="actorEdit" type="text" placeholder="Enter new director..." required>
                    </div>
                  </th>
                  <th>
                    <div class="info-item" style="width: 250px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>"><span><?php echo $item['actor']; ?></span></a>
                      <input name="directorEdit" type="text" placeholder="Enter new actor..." required>
                    </div>
                  </th>
                  <th>
                    <div class="info-item" style="width: 150px;">
                      <a href="<?php echo BASE_URL ?>/movie/moviebyid/<?php echo $item['idmovie']; ?>"><span><?php echo $item['relDate']; ?></span></a>
                      <input name="relDateEdit" type="date" placeholder="Enter new Release Date..." required>
                    </div>
                  </th>
                  <th>
                    <div class="info-item" style="width: 80px;">
                      <button name="editMovie" class="btn-action edit">Save</button>
                      <a href="<?php echo BASE_URL ?>/movie/deletemovie/<?php echo $item['idmovie']; ?>" class="btn-action delete" data-confirm="Are you sure to delete this item?">Delete</a>
                    </div>
                  </th>
                </tr>
              </form>
            <?php } ?>
            <!-- and so on... -->
          </tbody>
        </table>
      </div>
      <div class="button">
        <?php
        $totalMovies = count($total_movies);
        $totalPages = ceil($totalMovies / $item_page);
        for ($page = 1; $page <= $totalPages; $page++) {
        ?>
          <a href="<?php echo BASE_URL ?>/movie/?page=<?php echo $page; ?>"><?php echo $page; ?></a>
        <?php } ?>
      </div>
    </div>
  </div>

</div>
<script>
  const btnEdit = document.querySelector(".edit")
  const btnDelete = document.querySelector(".delete")
  btnEdit.onclick = function() {

  };
  btnDelete.onclick = function() {

  };
</script>
<script>
  var deleteLinks = document.querySelectorAll('.delete');

  for (var i = 0; i < deleteLinks.length; i++) {
    deleteLinks[i].addEventListener('click', function(event) {
      event.preventDefault();

      var choice = confirm(this.getAttribute('data-confirm'));

      if (choice) {
        window.location.href = this.getAttribute('href');
      }
    });
  }
</script>