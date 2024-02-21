    <aside class="main_aside">
        <div class="sidebar">
            <?php
            foreach ($list_Commodity as $commodity) {
                extract($commodity);
                $link = "../Product/list.php?id_commodity=$id_commodity";
                echo '
                <a href=' . $link . '>
                <span></span>
                <h4>' . $name_commodity . '</h4>
                </a>';
            }
            ?>

        </div>

    </aside>

    <section class="main_section">
        <div class="section">
            <!-- ----------------------------------- Slide Show ----------------------------------- -->
            <div class="slider">
                <div class="list">
                    <div class="item">
                        <img src="../../Content/Images/slide/sl1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../../Content/Images/slide/sl2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../../Content/Images/slide/sl3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../../Content/Images/slide/sl4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="../../Content/Images/slide/sl5.jpg" alt="">
                    </div>
                </div>
                <div class="buttons">
                    <button id="prev">
                        < </button>
                            <button id="next">></button>
                </div>
                <ul class="dots">
                    <li class="active"></li>
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
            <!------------------------------------- End Slide Show ----------------------------------- -->
        </div>
    </section>
    <script>
        // -------- SLIDE SHOW --------
        let slider = document.querySelector(".slider .list");
        let items = document.querySelectorAll(".slider .list .item");
        let next = document.getElementById("next");
        let prev = document.getElementById("prev");
        let dots = document.querySelectorAll(".slider .dots li");

        let lengthItems = items.length - 1;
        let active = 0;
        next.onclick = function() {
            active = active + 1 <= lengthItems ? active + 1 : 0;
            reloadSlider();
        };
        prev.onclick = function() {
            active = active - 1 >= 0 ? active - 1 : lengthItems;
            reloadSlider();
        };
        let refreshInterval = setInterval(() => {
            next.click();
        }, 3000);

        function reloadSlider() {
            slider.style.left = -items[active].offsetLeft + "px";
            //
            let last_active_dot = document.querySelector(".slider .dots li.active");
            last_active_dot.classList.remove("active");
            dots[active].classList.add("active");

            clearInterval(refreshInterval);
            refreshInterval = setInterval(() => {
                next.click();
            }, 3000);
        }

        dots.forEach((li, key) => {
            li.addEventListener("click", () => {
                active = key;
                reloadSlider();
            });
        });
        window.onresize = function(event) {
            reloadSlider();
        };
    </script>