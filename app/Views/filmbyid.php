<section>
    <div class="filmbyId-show">
        <div class="filmbyId-img">
            <img src="<?php echo $film_byid[0]["image"]; ?>" alt="">
        </div>

        <div class="filmbyId-right">

            <div class="filmbyId-content">
                <div class="filmbyId-title">
                    <h2><?php echo $film_byid[0]['title']; ?></h2>
                </div>

                <div class="filmbyId-info">
                    <span>Khởi chiếu</span>
                    <span>:</span>
                    <span><?php echo date('d/m/Y', strtotime(str_replace('/', '-', $film_byid[0]['relDate']))); ?></span>

                    <span>Thể loại</span>
                    <span>:</span>
                    <textarea readonly><?php echo $film_byid[0]['genre']; ?></textarea>

                    <span>Diễn viên</span>
                    <span>:</span>
                    <textarea readonly><?php echo $film_byid[0]['actor']; ?></textarea>

                    <span>Đạo diễn</span>
                    <span>:</span>
                    <textarea readonly><?php echo $film_byid[0]['director']; ?></textarea>
                </div>
            </div>

            <div class="filmbyId-action">
                <div class="filmId-action-title">
                    <h2>Suất chiếu</h2>
                </div>

                <?php foreach ($time_per_movie as $a => $item) { ?>
                <div class="filmId-action-content">
                    <div class="filmId-action-info">
                        <div class="filmId-action-item">
                            <span>Phòng:</span>
                            <span><?php echo $item['room'] ?></span>
                        </div>
                        <div class="filmId-action-item">
                            <span>Ngày:</span>
                            <span><?php echo date('d/m/Y', strtotime(str_replace('/', '-', $item['date']))); ?></span>
                        </div>
                    </div>

                    <a href="<?php echo BASE_URL ?>/booking/bookingbyid/<?php echo $item['idsuatchieu']; ?>">
                        <?php echo date('H:i', strtotime($item['gio_chieu'])); ?>
                    </a>
                </div>
                <?php } ?>
            </div>

        </div>
    </div>
</section>