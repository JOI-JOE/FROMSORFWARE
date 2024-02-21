<section class="section_product">
    <div class="title">
        <h1>ADD PRODUCT</h1>

    </div>
    <form action="index.php?btn_add" method="post" enctype="multipart/form-data" class="form">
        <?php
        if (isset($success)) {
            echo '<div class="input-box">
            <div class="alert">
            <i class="bx bxs-check-circle"></i>
                <h1>' . $success . '</h1>
            </div>
        </div>';
        }
        ?>

        <div class="input-box">
            <label>Id_Product</label>
            <input type="text" placeholder="Auto Number" disabled />
        </div>
        <div class="input-box">
            <label>Name</label>
            <input type="text" placeholder="Enter full name" name="name_product" required />
        </div>
        <div class="input-box">
            <label>Type Of Game</label>
            <div class="select-box">
                <select name="type_product">
                    <?php
                    foreach ($types as $type) {
                        extract($type);
                        echo '<option value="' . $id_commodity . '">' . $name_commodity . '</option>';
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="type-box">
            <label>Classify</label>
            <div class="type-option">
                <div class="genre">
                    <input type="radio" id="check-normal" name="genre" value="normal" checked />
                    <label for="check-normal">Normal</label>
                </div>
                <div class="genre">
                    <input type="radio" id="check-special" name="genre" value="special" />
                    <label for="check-special">Special</label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="input-box">
                <label>Released</label>
                <input type="date" placeholder="Enter birth date" name="date_product" required />
                <label>View</label>
                <input type="number" placeholder="0" disabled />
            </div>
            <div class="input-box">
                <label>Price</label>
                <input placeholder="Price" name="price_product" required />
                <label>Sale</label>
                <input placeholder="Sale" name="sale_product" required />
            </div>
        </div>

        <div class="column">
            <div class="input-box">
                <label for="file">Image</label>
                <div class="input_file">
                    <input type="file" id="file" name="img_product" accept="image/*" hidden>
                    <div class="img-area" data-img="">
                        <h3>Upload Image</h3>
                        <p>Image size must be less than <span>2MB</span></p>
                    </div>
                    <input type="button" class="select-image" value="Submit" />
                </div>
            </div>
            <div class="input-box">
                <label>Description</label><br>
                <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."></textarea>
            </div>
        </div>
        <!-- <input type="submit" name="Add" value="THEM MOI"> -->
        <div class="button">
            <input type="submit" name="Add" class="my-button" value="Add">
            <input type="reset" value="NHAP LAI" class="my-button">
            <a href="index.php"><input type="button" class="my-button" value="DANH SACH"></a>
        </div>
        <?php
        if (isset($thongbao) && $thongbao != "")
            echo $thongbao;
        ?>
    </form>
</section>