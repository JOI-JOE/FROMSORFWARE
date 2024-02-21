<div class="container swiper">
    <div class="title-product">
        <h1>Trending Game</h1>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            foreach ($trending as $tr) {
                extract($tr);
                echo '<div class="card swiper-slide">
                <a href="#">
                    <div class="box_P">
                        <!-- img -->
                        <div class="slide-img">
                            <img src="../../Content/Images/product/' . $img_product . '" alt="" />
                            <!-- overlay -->
                            <div class="overlay">
                                <p href="#" class="buy-btn">
                                    <a href=""><i class="bx bx-movie-play"></i></a>
                                    <a href="#"><i class="bx bxs-shopping-bag"></i></a>
                                </p>
                            </div>
                        </div>
                        <!-- detail-box -->
                        <div class="detail-box">
                            <div class="type">
                            <a href="../Product/detail.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span>' . ($sale_product * 100) . '%</span>
                            </div>
                            <!-- price -->
                            <a href="#" class="price">$' . $price_product . '</a>
                        </div>
                    </div>
                </a>
            </div>';
            }
            ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- ============================== GAME OF THE YEAR ================================= -->
<div class="container swiper">
    <div class="title-product">
        <h1>Games Of The Year</h1>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            foreach ($games_of_the_year as $game) {
                extract($game);
                echo '<div class="card swiper-slide">
                <a href="#">
                    <div class="box_P">
                        <!-- img -->
                        <div class="slide-img">
                            <img src="../../Content/Images/product/' . $img_product . '" alt="" />
                            <!-- overlay -->
                            <div class="overlay">
                                <p href="#" class="buy-btn">
                                    <a href=""><i class="bx bx-movie-play"></i></a>
                                    <a href="#"><i class="bx bxs-shopping-bag"></i></a>
                                </p>
                            </div>
                        </div>
                        <!-- detail-box -->
                        <div class="detail-box">
                            <div class="type">
                                <a href="../Product/detail.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span>' . ($sale_product * 100) . '%</span>
                            </div>
                            <!-- price -->
                            <a href=""../Product/detail.php?id_product=' . $id_product . '" class="price">$' . $price_product . '</a>
                        </div>
                    </div>
                </a>
            </div>';
            }
            ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- ============================== END GAME OF THE YEAR ================================= -->


<!-- ------------------ UPCOMING GAME --------------- -->
<div class="container swiper">
    <div class="title-product">
        <h1>Upcoming</h1>
    </div>
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
            <?php
            foreach ($upcoming as $game) {
                extract($game);
                echo '<div class="card swiper-slide">
                <a href="#">
                    <div class="box_P">
                        <!-- img -->
                        <div class="slide-img">
                            <img src="../../Content/Images/product/' . $img_product . '" alt="" />
                            <!-- overlay -->
                            <div class="overlay">
                                <p href="#" class="buy-btn">
                                    <a href=""><i class="bx bx-movie-play"></i></a>
                                    <a href="#"><i class="bx bxs-shopping-bag"></i></a>
                                </p>
                            </div>
                        </div>
                        <!-- detail-box -->
                        <div class="detail-box">
                            <div class="type">
                            <a href="../Product/detail.php?id_product=' . $id_product . '">' . $name_product . '</a>
                                <span>' . $date_product . '</span>
                            </div>
                            <!-- price -->
                            <a href="#" class="price">$0</a>
                        </div>
                    </div>
                </a>
            </div>';
            }
            ?>

        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
</div>
<!-- ------------------ END UPCOMING GAME --------------- -->

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 5,
        spaceBetween: 30,
        autoplay: true,
        autoplayDisableOnInteraction: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>