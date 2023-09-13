          <h2 class="section-title">Phim trong tuần</h2>
          <section>
            <div class="items">
              <div class="swiper myItem">
                <div class="swiper-wrapper">
                  <?php foreach ($total_movies as $key => $movie) { ?>
                    <div class="swiper-slide">
                      <div class="item">
                        <img src="<?php echo $movie['image']; ?>" alt="" />
                        <div class="item-content">
                          <div class="item-title">
                            <?php echo $movie['title']; ?>
                          </div>
                          <a href="<?php echo BASE_URL ?>/film/timebyfilm/<?php echo $movie['idmovie']; ?>" class="item-button">Chi Tiết</a>
                          <a href="<?php echo BASE_URL ?>/film/timebyfilm/<?php echo $movie['idmovie']; ?>" class="item-button">đặt vé</a>
                        </div>
                      </div>
                    </div>
                  <?php } ?>
                </div>
                <div class="swiper-button-next btn-swiper"></div>
                <div class="swiper-button-prev btn-swiper"></div>
                <div class="swiper-pagination btn-swiper"></div>
              </div>
            </div>
          </section>
          <h2 class="section-title">Phim sắp chiếu</h2>
          <section>
            <div class="items">
              <div class="swiper myItem">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/190x260/2e2b8cd282892c71872b9e67d2cb5039/p/o/poster_official_preiview.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                        XỨ SỞ CÁC NGUYÊN TỐ
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/190x260/2e2b8cd282892c71872b9e67d2cb5039/r/s/rsz_z_teaser-poster_qnnd_2.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                        QUỲNH HOA NHẤT DẠ
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/190x260/2e2b8cd282892c71872b9e67d2cb5039/r/s/rsz_first_look_social.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                        ĐẤT RỪNG PHƯƠNG NAM
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/image/c5f0a1eff4c394a251036189ccddaacd/m/a/main_poster_-_dmmovie2023.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                          PHIM ĐIỆN ẢNH DORAEMON: NOBITA VÀ VÙNG ĐẤT LÝ TƯỞNG
                          TRÊN BẦU TRỜI
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/190x260/2e2b8cd282892c71872b9e67d2cb5039/v/i/vietnam_la_intl_online_1080x1350_fnl_01-min_1.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                        YÊU NHƯ LẦN ĐẦU
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide">
                    <div class="item">
                      <img src="https://www.cgv.vn/media/catalog/product/cache/1/thumbnail/190x260/2e2b8cd282892c71872b9e67d2cb5039/p/o/poster-kraken.jpg" alt="" />
                      <div class="item-content">
                        <div class="item-title">
                        RUBY THỦY QUÁI TUỔI TEEN
                        </div>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">Chi Tiết</a></button>
                        <button class="item-button"><a href="<?php echo BASE_URL ?>/index/notfound" name="">đặt vé</a></button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="swiper-button-next btn-swiper"></div>
                <div class="swiper-button-prev btn-swiper"></div>
                <div class="swiper-pagination btn-swiper"></div>
              </div>
            </div>
          </section>
          <!-- End slider -->