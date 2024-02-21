<?php
if (is_array($types)) {
    extract($types);
}
?>
<section class="section_product">
    <div class="home__container container">
        <div class="title">
            <h1>UPDATE TYPE OF GAME</h1>
        </div>
        <?php
        if (isset($thongbao) && $thongbao !== "") {
            // Escape the value for security
            echo "<script>alert('Update Successfully');</script>";
        }
        ?>
        <form action="index.php?btn_update" method="post" enctype="multipart/form-data" class="form">
            <div class="user-details">
                <div class="input-box">
                    <span class="details">ID_Type</span>
                    <input type="text" name="id_type" value="<?= $id_commodity ?>" disabled>
                </div>
                <div class="input-box">
                    <span class="details">Name_Type</span>
                    <input type="text" name="name_type" value="<?php if (isset($name_commodity) && ($name_commodity != "")) echo $name_commodity; ?>">
                </div>
            </div>
            <div class="button">
                <input type="hidden" name="id_type" value="<?php if (isset($id_commodity) && ($id_commodity > 0)) echo $id_commodity; ?>">
                <input type="submit" class="my-button" name="update" value="Update">
                <input type="reset" class="my-button" value="NHAP LAI">
                <a href="index.php?list_type"><input type="button" class="my-button" value="DANH SACH"></a>
            </div>
        </form>
    </div>
    </div>
</section>