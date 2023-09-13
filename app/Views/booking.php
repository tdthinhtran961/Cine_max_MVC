<section>
    <form action="<?php echo BASE_URL?>/cart" method="POST" class="bk-show">
        <div class="bk-img">
            <img src="<?php echo $showtime[0]['image'] ?>" alt="">
        </div>

        <div class="bk-right">
            <div >
                <div class="bk-title">
                    <h2><?php echo $showtime[0]['title'] ?></h2>
                </div>

                <div class="bk-info">
                    <div class="bk-content">
                        <span class="span-title">Khởi chiếu</span>
                        <input type="date" name="" id="" value="<?php echo $showtime[0]['relDate'] ?>" readonly>
                        <span class="span-title">Thể loại</span>
                        <textarea readonly><?php echo $showtime[0]['genre'] ?></textarea>
                        <span class="span-title">Diễn viên</span>
                        <textarea readonly><?php echo $showtime[0]['actor'] ?></textarea>
                        <span class="span-title">Đạo diễn</span>
                        <textarea readonly><?php echo $showtime[0]['director'] ?></textarea>
                        <span class="span-title">Ngày chiếu</span>
                        <input type="date" name="" id="" value="<?php echo $showtime[0]['date'] ?>" readonly>
                        <span class="span-title">Giờ chiếu</span>
                        <input type="time" value="<?php echo $showtime[0]['gio_chieu'] ?>" readonly>
                        <span class="span-title">Phòng</span>
                        <span><?php echo $showtime[0]['room'] ?></span>
                    </div>
                    <div class="bk-seat">
                        <div class="cart-seat">
                            <div class="movie-container">
                            </div>
                            <div class="movie-container">
                                <div class="screen"></div>
                                <img class="screen-img" src="<?php echo $showtime[0]['image'] ?>" alt="">
                                
                                <div class="row">
                                    <?php foreach ($total_seat as $key => $seat) { ?>
                                        
                                    <label for="toggle-input-<?php echo $seat['id'] ?>" class="toggle">
                                        <input 
                                            name="idseat[]" 
                                            value="<?php echo $seat['id'] ?>" 
                                            type="checkbox" 
                                            class="toggle_input" 
                                            
                                            id="toggle-input-<?php echo $seat['id'] ?>" 
                                            <?php foreach ($booking_by_showtime as $key => $booking) { 
                                                if($booking['id_seat'] == $seat['id']){ 
                                                    echo "disabled";
                                                }
                                            } ?>

                                        >
                                            
                                        </input>
                                        <div class="toggle_bar
                                        <?php foreach ($booking_by_showtime as $key => $booking) { 
                                                if($booking['id_seat'] == $seat['id']){ 
                                                    echo "sold";
                                                }
                                            } ?>
                                        "><?php echo $seat['id'] ?></div>
                                    </label>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <ul class="showcase">
                            <li>
                                <div class="seat"></div>
                                <small>Available</small>
                            </li>
                            <li>
                                <div class="seat selected"></div>
                                <small>Selected</small>
                            </li>
                            <li>
                                <div class="seat sold"></div>
                                <small>Sold</small>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="bk-action">
                <button type="submit" name="idsuatchieu" value="<?php echo $showtime[0]['idsuatchieu'] ?>" >PAYMENT</button>
            </div>
        </div>
    </form>

</section>
