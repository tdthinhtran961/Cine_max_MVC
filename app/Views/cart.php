<section>
    <div class="cart-show">
        <div class="cart-img">
            <img src="<?php echo $showtime[0]['image'] ?>" alt="">
        </div>

        <form action="<?php echo BASE_URL?>/cart/insertcart" method="POST" class="cart-right">
            <div class="cart-title">
                <h2><?php echo $showtime[0]['title'] ?></h2>
            </div>

            <div class="cart-showtime">
                <span>Ngày chiếu</span>
                <span>:</span>
                <span><?php echo date('d/m/Y', strtotime(str_replace('/', '-', $showtime[0]['date']))) ?></span>
                

                <span>Giờ chiếu</span>
                <span>:</span>
                <span><?php echo date('h:i', strtotime($showtime[0]['gio_chieu'])) ?></span>
                

                <span>Phòng</span>
                <span>:</span>
                <span><?php echo $showtime[0]['room'] ?></span>

                <span class="wrapper-cart_seat">Ghế</span>
                <span class="wrapper-cart_seat">:</span>
                <div class="wrapper-cart_seat">
                    <?php foreach ($ar_idSeat as $key => $seat) { ?>
                        <div class="cart_seat">
                            <?php echo $seat ?>
                            <input name="idseat[]" type="checkbox" value="<?php echo $seat ?>" id="" style="display: none;" checked readonly>
                        </div>
                    <?php } ?>
                </div>

                <span>Giá</span>
                <span>:</span>
                <span>
                    <?php 
                    $price = count($ar_idSeat) * 45000; 
                    echo number_format($price,0,',','.').' đ'; ?>
                </span>

            </div>

            <div class="cart-momo">
                Momo: 123456789
            </div>

            <div class="cart-user">
                <div class="cart-user_title">
                    <h4>Vui lòng nhập tên, họ, điện thoại và email</h4>
                </div>
                <div class="cart-user_info">
                    <input name="lastname" type="text" placeholder="Nhập Tên của bạn..." required>
                    <input name="firstname" type="text" placeholder="Nhập 'Họ' của bạn..." required>
                    <input name="email" type="email" placeholder="Nhập địa chỉ email của bạn ..." required>
                    <input name="phone" type="number" placeholder="Nhập số điện thoại của bạn ..." required>
                </div>
            </div>

            <!-- <div class="cart-value"></div> -->

            <div class="cart-submit">
                <button type="submit" name="id_suatchieu" value="<?php echo $showtime[0]['idsuatchieu'] ?>" >Payment</button>
            </div>
        </form>
    </div>
</section>