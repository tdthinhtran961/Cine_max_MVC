<section>
    <div class="wrapper-movie">
        <div class="wrapper-line"></div>
        <?php foreach ($total_movies as $key => $movie) { ?>
            <div class="card-movie">
                <div class="movie-img">
                    <img src="<?php echo $movie['image']; ?>" alt="">
                </div>
                <div class="movie-info">
                    <div class="movie-title">
                        <h4><?php echo $movie['title']; ?></h4>
                    </div>
                    
                    <div class="form-movie">
                        <div class="movie-content">
                            <span>Khởi chiếu</span>
                            <input value="<?php echo date('d/m/Y', strtotime(str_replace('/', '-', $movie['relDate']))); ?>" readonly></input>


                            <span>Thể loại</span>
                            <textarea readonly><?php echo $movie['genre']; ?></textarea>

                            <span>Diễn viên</span>
                            <textarea readonly><?php echo $movie['actor']; ?></textarea>

                            <span>Đạo diễn</span>
                            <textarea readonly><?php echo $movie['director']; ?></textarea>

                        </div>


                    </div>
                    <div class="btn-movie">
                        <a href="<?php echo BASE_URL ?>/index/notfound" name="">Trailer</a>
                        <a href="<?php echo BASE_URL ?>/film/timebyfilm/<?php echo $movie['idmovie']; ?>">Order</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>

</section>