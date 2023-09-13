<?php
$url = isset($_GET["url"]) ? $_GET["url"] : NULL;

if ($url!=NULL) {
$url = rtrim($url, "/");
$url = explode("/", $url);
} else {
unset($url);
}
?>
<section>
    <div class="wrapper-btn-times">
        <?php foreach($total_time as $key => $time) { ?>
            <div class="btn-time <?php if($url[2] == $time['idgiochieu']) {echo "btn-time-active";} ?>">
                <a href="<?php echo BASE_URL ?>/suatchieu/catetime/<?php echo $time['idgiochieu']; ?>"><?php echo date('H:i', strtotime($time['gio_chieu'])); ?></a>
            </div>
            
        <?php } ?>
    </div>
    
    <div class="wrapper-time">
        <div class="wrapper-line"></div>
        <?php foreach($movie_per_time as $key => $item) { ?>
            <div class="card-time">
                <div class="time-img">
                    <img src="<?php echo $item['image']; ?>" alt="">
                </div>

                <div class="time-info">
                    <p class="time-title"><?php echo $item['title']; ?></p>

                    <div class="time-content">
                        <span>Ngày chiếu</span>
                        <span>: <?php echo date('d/m/Y', strtotime(str_replace('/', '-', $item['date']))); ?></span>
                        

                        <span>Giờ chiếu</span>
                        <span>: <?php echo date('H:i', strtotime($item['gio_chieu'])); ?></span>
                        

                        <span>Phòng</span>
                        <span>: <?php echo $item['room']; ?></span>
                    </div>

                    <div class="form-order">
                        
                        <div class="btn-order">
                            <a href="">Trailer</a>
                            <a href="<?php echo BASE_URL ?>/booking/bookingbyid/<?php echo $item['idsuatchieu']; ?>" class="">đặt vé</a>
                            
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</section>