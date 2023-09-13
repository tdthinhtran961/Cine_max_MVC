
    <div class="home-content">
      
      <!-- <div class="add-boxes">
        <form action="<?php echo BASE_URL?>/order/insertorder" method="post" class="form-add">
          <div class="wrapper-add">
            <div class="item-add">
                <label for="firstname" class="label">Firt name</label>
                <input class="val-add" type="text" id="firstname" name="firstname" placeholder="Nhập tên của bạn ..." required>
            </div>
            <div class="item-add">
                <label for="lastname" class="label">Last name</label>
                <input class="val-add" type="text" id="lastname" name="lastname" placeholder="Nhập họ của bạn..." required>
            </div>
            <div class="item-add">
                <label for="phone" class="label">Phone number</label>
                <input class="val-add" type="number" id="phone" name="phone" placeholder="Nhập số điện thoại của bạn ..." required>
            </div>
            <div class="item-add">
                <label for="email" class="label">Email</label>
                <input class="val-add" type="email" id="email" name="email" placeholder="Nhập địa chỉ Email của bạn ..." required>
            </div>
            <div class="item-add">
                <label for="showdate" class="label">Show date</label>
                <input class="val-add" type="text" id="showdate" name="showdate" placeholder="Ngày chiếu phim ..." required>
            </div>
            <div class="item-add">
                <label for="showtime" class="label">Show time</label>
                <input class="val-add" type="time" id="showtime" name="showtime" placeholder="Giờ chiếu ..." required>
            </div>
            <div class="item-add">
                <label for="room" class="label">room</label>
                <input class="val-add" type="text" id="room" name="room" placeholder="phòng ..." required>
            </div>
            <div class="item-add">
                <label for="movie" class="label">movie</label>
                <input class="val-add" type="text" id="movie" name="movie" placeholder="phim ..." required>
            </div>
            <div class="item-add">
                <label for="seat" class="label">Seat</label>
                <input class="val-add" type="text" id="seat" name="seat" placeholder="ghế ..." required>
            </div>
            <div class="item-add">
                <label for="bookdatetime" class="label">Book datetime</label>
                <?php
                // Set the new timezone
                date_default_timezone_set('Asia/Ho_Chi_Minh');
                $date = date('h:i d/m/Y');
                ?>
                <input class="val-add" type="text" id="bookdatetime" name="bookdatetime" value="<?php echo $date; ?>" readonly required>
            </div>
          </div>    
          <button name="addMovie" type="submit">Add booking</button>
        </form>
      </div> -->

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
          <div class="title">Vé</div>
          <div class="info-details">
            <table class="styled-table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Suất chiếu</th>
                  <th>Gế</th>
                  <th>Họ</th>
                  <th>Tên</th>
                  <th>Số điện thoại</th>
                  <th>email</th>
                  <th>Ngày, giờ đặt vé</th>
                  <th>Giá</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($booking_per_page as $key => $booking) { ?>
                <form action="" method="POST" enctype="multipart/form-data">
                <!-- enctype="multipart/form-data"  => unload image -->
                
                  <tr>
                    <th>
                      <?php echo $booking['idbooking']; ?>
                    </th>

                    <th>
                    <?php echo $booking['id_suatchieu']; ?>

                    </th>

                    <th>
                    <?php echo $booking['id_seat']; ?>

                    </th>

                    <th>
                      <?php echo $booking['firstName']; ?>

                    </th>

                    <th>
                    <?php echo $booking['lastName']; ?>

                    </th>

                    <th>
                    <?php echo $booking['phone']; ?>

                    </th>

                    <th>
                    <?php echo $booking['email']; ?>

                    </th>

                    <th>
                    <?php echo date('h:i d/m/Y', strtotime(str_replace('/', '-', $booking['booking_DateTime']))); ?>
                    </th>
                    
                    <th>
                    <?php echo $booking['amout']; ?>
                    </th>
                  </tr>
                </form>
                <?php
                } 
                ?>
                  <!-- and so on... -->
                </tbody>
            </table>
          </div>
          <div class="button">
            <?php
              $totalBooking= count($total_booking);
              $totalPages= ceil($totalBooking/$item_page);
              for ($page = 1; $page <= $totalPages; $page++) {
            ?>
            <a href="<?php echo BASE_URL?>/order/?page=<?php echo $page; ?>"><?php echo $page; ?></a>
            <?php } ?>
          </div>
        </div>
      </div>

    </div>
    <script>
      const btnEdit = document.querySelector(".edit")
      const btnDelete = document.querySelector(".delete")
      btnEdit.onclick = function(){

      };
      btnDelete.onclick = function(){

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
    
    