<section>
    <div class="bg-purple">

        <div class="stars">
            <div class="central-body">
                <a href="<?php echo BASE_URL ?>/film" class="btn-go-home">
                    <h2 class="msg-boxes">
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
                    </h2>Go Home
                </a>
                <div>
                    <?php
                    // echo "<pre>";
                    // print_r($booking_by_showtime);
                    // echo "</pre>";
                    ?>
                </div>
            </div>
            <div class="objects">
                <img class="object_rocket" src="http://salehriaz.com/404Page/img/rocket.svg" width="40px">
                <div class="earth-moon">
                    <img class="object_earth" src="http://salehriaz.com/404Page/img/earth.svg" width="100px">
                    <img class="object_moon" src="http://salehriaz.com/404Page/img/moon.svg" width="80px">
                </div>
                <div class="box_astronaut">
                    <img class="object_astronaut" src="http://salehriaz.com/404Page/img/astronaut.svg" width="140px">
                </div>
            </div>
            <div class="glowing_stars">
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>
                <div class="star"></div>

            </div>

        </div>

    </div>
</section>