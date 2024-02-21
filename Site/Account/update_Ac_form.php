<section class="section">
    <div class="section__container">
        <div class="content">
            <h2>Hello</h2>

            <!-- <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam veritatis possimus officia? Ad
                neque voluptatum facere, nisi ipsa sint quisquam dolorem assumenda, incidunt aperiam deserunt eos?
                Vero sit odit sapiente!
            </p> -->
            <?php
            if (empty($_POST['update_ac'])) {
                extract($_SESSION['user']);
            }
            ?>
            <form action="../Account/update_Ac.php" method="post" enctype="multipart/form-data">

                <h1 class="title">
                    <Span><?= $name_client ?> <br>A</Span> Gamer
                </h1>

                <!-- input alert -->
                <?php
                if (isset($MESSAGE)) {
                    $alert = ($MESSAGE === 'Update your infor successfully') ? "success" : "error";
                    echo '<div class="input_alert ' . $alert . '">
                    <span>' . $MESSAGE . '</span>
                    </div>';
                }
                ?>

                <div class="content">
                    <div class="user-details">
                        <!-- INPUT FULL NAME -->
                        <div class="input-box">
                            <span class="details">Name</span>
                            <input type="text" name="name" value="<?= $name_client ?>" placeholder="Enter your email">
                        </div>

                        <!-- INPUT EMAIL -->
                        <div class="input-box">
                            <span class="details">Email</span>
                            <input type="text" name="email" value="<?= $email ?>" placeholder="Enter your old password">
                        </div>
                    </div>

                    <!-- INPUT IMG CLIENT -->
                    <div class="input-box">
                        <span class="details">Image</span>
                        <div class="input_file">
                            <input type="file" id="file" name="img_client" accept="image/*" hidden>
                            <div class="img-area" data-img="">
                                <h3>Upload Image</h3>
                                <p>Image size must be less than <span>2MB</span></p>
                            </div>
                            <input type="button" class="select-image" value="Submit" />
                        </div>
                    </div>

                    <div class="action__btns">
                        <button type="submit" name="update_ac" class="update_ac">Update</button>
                    </div>
                </div>

                <input type="hidden" name="id_client" value="<?= $id_client ?>">
                <input type="hidden" name="password" value="<?= $password ?>">
                <input type="hidden" name="active" value="<?= $active ?>">
                <input type="hidden" name="role" value="<?= $role ?>">
                <input type="hidden" name="old_img" value="<?= $img_client ?>">
        </div>

        <div class="image">
            <img src="<?= $CONTENT_URL; ?>/Images/client/<?= $img_client ?>" alt="portfolio">
        </div>
        </form>

    </div>
</section>
<script src="<?= $CONTENT_URL ?>/JS/app.js"></script>