    <div class="home-content">
      <div class="add-boxes">
        <form action="<?php echo BASE_URL?>/showtime/insertshowtime" method="post" class="form-add">

          <div class="wrapper-add">
            <div class="item-add">
              <label for="date" class="label">Ngày chiếu</label>
              <input type="date" id="date" name="date" required>
            </div>

            <div class="item-add">
              <label for="time" class="label">Giờ chiếu</label>
              <select name="time" id="time">
                <?php foreach($total_time as $key => $time) { ?>
                <option value="<?php echo $time['idgiochieu']; ?>"><?php echo $time['gio_chieu']; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="item-add">
              <label for="movie" class="label">Phim</label>
              <select name="movie" id="movie">
                <?php foreach($total_movies as $key => $movie) { ?>
                <option value="<?php echo $movie['idmovie']; ?>"><?php echo $movie['title']; ?></option>
                <?php } ?>
              </select>
            </div>

            <div class="item-add">
              <label for="room" class="label">Phòng chiếu</label>
              <select name="room" id="room">
                <?php foreach($total_room as $key => $room) { ?>
                <option value="<?php echo $room['idroom']; ?>"><?php echo $room['room']; ?></option>
                <?php } ?>
              </select>
            </div>

          </div>    
          <button name="addShowtime" type="submit">Thêm suất chiếu</button>
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
          <div class="title">Suất chiếu</div>
          <div class="info-details">
            <table class="styled-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Time</th>
                  <th>Movie</th>
                  <th>image</th>
                  <th>Room</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach($showtime_per_page as $key => $item) { ?>
                <form action="<?php echo BASE_URL?>/showtime/updateshowtime" method="POST">
                  <tr>
                    <th>
                      <input name="id_suatchieu" style=" text-align: center; width: 50px; background-color: transparent; border: none; " 
                      type="text" value="<?php echo $item['idsuatchieu']; ?>" readonly>
                    </th>

                    <th>
                      <div class="info-item_sc">
                        <span><?php echo $item['date']; ?></span>
                        <input name="dateEdit" type="date" required>
                      </div>
                    </th>

                    <th>
                      <div class="info-item_sc" style="width: 150px;">
                        <span ><?php echo $item['gio_chieu']; ?></span>
                        <select name="timeEdit" id="timeEdit">
                          <?php foreach($total_time as $key => $time) { ?>
                          <option value="<?php echo $time['idgiochieu']; ?>"><?php echo $time['gio_chieu']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </th>

                    <th>
                      <div class="info-item_sc" style="width: 300px;">
                        <span ><?php echo $item['title']; ?></span>
                        <select name="movieEdit" id="movieEdit">
                          <?php foreach($total_movies as $key => $movie) { ?>
                          <option value="<?php echo $movie['idmovie']; ?>"><?php echo $movie['title']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </th>


                    <th>
                      <div class="info-item_sc" style="width: 150px;">
                        <img style="width: 150px; height: 150px; object-fit: cover;" src="<?php echo $item['image']; ?>" alt="">
                      </div>
                    </th>

                    <th>
                      <div class="info-item_sc" style="width: 150px;">
                        <span><?php echo $item['room']; ?></span>
                        <select name="roomEdit" id="roomEdit">
                          <?php foreach($total_room as $key => $room) { ?>
                          <option value="<?php echo $room['idroom']; ?>"><?php echo $room['room']; ?></option>
                          <?php } ?>
                        </select>
                      </div>
                    </th>

                    <th>
                      <div class="info-item_sc" style="width: 80px;">
                        <button name="editShowtime" class="btn-action">Save</button>
                        <a href="<?php echo BASE_URL?>/showtime/deleteshowtime/<?php echo $item['idsuatchieu']; ?>" 
                          class="btn-action delete" 
                          data-confirm="Are you sure to delete this item?">Delete</a>
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
              $totalShowtime= count($total_showtime);
              $totalPages= ceil($totalShowtime/$item_page);
              for ($page = 1; $page <= $totalPages; $page++) {
            ?>
            <a href="<?php echo BASE_URL?>/showtime/?page=<?php echo $page; ?>"><?php echo $page; ?></a>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
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