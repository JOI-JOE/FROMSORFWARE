<?php
if (is_array($products)) {
    extract($products);
}
$up_img_dm = "../../Content/Images/product/" . $img_product;
if (is_file($up_img_dm)) {
    $img = "<img src='" . $up_img_dm . "' width ='100'  style='border-radius:20px;border:1px solid rgba(0, 0, 0, 0.1)'>";
} else {
    $img = '<h1 style="text-align: center;">No photo</h1>';
}

?>
>
<section class="section_product">
    <div class="title">
        <h1>UPDATE PRODUCT</h1>
    </div>
    <form action="index.php?btn_update" method="post" enctype="multipart/form-data" class="form">
        <div class="input-box">
            <label>Id_Product</label>
            <input type="text" value="<?= $id_product ?>" placeholder="Auto Number" disabled />
        </div>
        <div class="input-box">
            <label>Name</label>
            <input type="text" name="name_product" value="<?= $name_product ?>" />
        </div>
        <div class="input-box">
            <label>Type Of Game</label>
            <div class="select-box">
                <select name="type_product">
                    <?php
                    foreach ($types as $commodity) {
                        // htmlspecialchars() chuyển đổi các ký tự đặc biệt này thành các ký tự HTML tương ứng
                        $selected = $commodity['id_commodity'] === $products['id_commodity'] ? 'selected' : '';
                        echo '<option value="' . $commodity['id_commodity'] . '" ' . $selected . '>' . ($commodity['name_commodity']) . '</option>'; // Escape output
                    }
                    ?>
                </select>
            </div>
        </div>
        <div class="type-box">
            <label>Classify</label>
            <div class="type-option">
                <div class="genre">
                    <input type="radio" id="check-normal" name="genre" value="normal" <?php echo $special === "normal" ? "checked" : ""; ?> />
                    <label for="check-normal">Normal</label>
                </div>
                <div class="genre">
                    <input type="radio" id="check-special" name="genre" value="special" <?php echo $special === "special" ? "checked" : ""; ?> />
                    <label for="check-special">Special</label>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="input-box">
                <label>Released</label>
                <input type="date" placeholder="Enter birth date" name="date_product" value="<?= $date_product;  ?>" />
                <label>View</label>
                <input type="number" placeholder="0" disabled />
            </div>
            <div class="input-box">
                <label>Price</label>
                <input placeholder="Price" name="price_product" value="<?= $price_product;  ?>" />
                <label>Sale</label>
                <input placeholder="Sale" name="sale_product" value="<?= $sale_product;  ?>" />
            </div>
        </div>

        <div class="column">
            <div class="input-box">
                <div class="input_file">
                    <input type="file" id="file" name="img_product" accept="image/*" hidden>
                    <div class="img-area" data-img="">
                        <i class='bx bxs-cloud-upload icon'></i>
                        <h3>Upload Image</h3>
                        <p>Image size must be less than <span>2MB</span></p>
                    </div>
                    <input type="button" class="select-image" value="Submit" />
                </div>
            </div>
            <div class="input-box">
                <?= $img ?>
            </div>
        </div>
        <div class="input-box">
            <label>Description</label><br>
            <textarea name="opinion" cols="30" rows="5" placeholder="Your opinion..."><?= $description ?></textarea>
        </div>
        <!-- <input type="submit" name="Add" value="THEM MOI"> -->
        <div class="button">
            <input type="hidden" name="id_product" value="<?= $id_product ?>">
            <input type="submit" name="update" class="my-button" value="Update">
            <input type="reset" value="NHAP LAI" class="my-button">
            <a href="index.php"><input type="button" class="my-button" value="DANH SACH"></a>
        </div>
        <?php
        if (isset($thongbao) && $thongbao != "")
            echo $thongbao;
        ?>
    </form>
</section>