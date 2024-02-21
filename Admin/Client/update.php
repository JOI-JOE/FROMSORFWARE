<?php
if (is_array($client)) {
    extract($client);
}
$up_img_dm = "../../Content/Images/client/" . $img_client;
if (is_file($up_img_dm)) {
    $img = "<img src='" . $up_img_dm . "' width ='250'  style='border-radius:20px;border:1px solid rgba(0, 0, 0, 0.1)'>";
} else {
    $img = '<h1 style="text-align: center;">NO PHOTO</h1>';
}

?>
<section class="section_product">
    <div class="title">
        <h1>Update Client</h1>
    </div>
    <form action="index.php?btn_update" method="post" enctype="multipart/form-data" class="form">
        <div class="input-box">
            <label>Id_Client</label>
            <input type="text" value="<?= $id_client  ?>" disabled />
        </div>
        <div class="input-box">
            <label>Email</label>
            <input type="email" value="<?= $email ?>" name="email_client" />
        </div>
        <div class="input-box">
            <label>Password</label>
            <input type="text" value="<?= $password  ?>" name="pass_client" />
        </div>

        <div class="input-box">
            <label>Full Name</label>
            <input type="text" value="<?= $name_client ?>" name="name_client" required />
        </div>
        <div class="column">
            <div class="input-box">
                <label for="file">Image</label>
                <div class="input_file">
                    <input type="file" id="file" name="img_client" accept="image/*" hidden>
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
            <label>Role</label>
            <div class="select-box">
                <select name="role">
                    <?php
                    echo '<option value="' . $role  . '"  selected> ' . $role . ' </option>';
                    ?>
                    <option value="CEO">CEO</option>
                    <option value="Boss">Boss</option>
                    <option value="Client">Client</option>
                </select>
            </div>
        </div>
        <div class="type-box">
            <label>Choose</label>
            <div class="type-option">
                <div class="genre">
                    <input type="radio" id="active" name="active" value="1" <?php echo ($active == 1) ? 'checked' : '' ?> />
                    <label for="active">Active</label>
                </div>
                <div class="genre">
                    <input type="radio" id="not-active" name="active" value="0" <?php echo ($active == 0) ? 'checked' : '' ?> />
                    <label for="not-active">Not Active</label>
                </div>
            </div>
        </div>
        <div class="button">
            <input type="hidden" name="id_client" value="<?= $id_client ?>">
            <input type="submit" name="update" class="my-button" value="Update">
            <input type="reset" value="Reset" class="my-button">
            <a href="index.php"><input type="button" class="my-button" value="DANH SACH"></a>
        </div>
    </form>
</section>